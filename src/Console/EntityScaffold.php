<?php

namespace MohammadNaj\laravelEntityScaffold\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class EntityScaffold extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:entity {entity}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create (model,migration,controller,request,resource) for your entity.';


    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $entityName = ucfirst($this->Argument('entity'));

        $this->createController($entityName);

        $this->createModel($entityName);

        $this->createRequest($entityName);

        $this->createResource($entityName);


        $this->info('=== Everything was done right');
    }

    public function createController(string $entityName): void
    {
        \Artisan::call('make:controller '
            . $this->normalizePath(config('entity-scaffold.controllers_path'))
            . Str::plural($entityName) . 'Controllers');

        $this->info('--- Controller created  successfully');
    }

    public function createModel(string $entityName): void
    {
        \Artisan::call('make:model '
            . $this->normalizePath(config('entity-scaffold.models_path'))
            . $entityName . DIRECTORY_SEPARATOR . $entityName . ' -m');
        $this->info('--- Model created  successfully');
        $this->info('--- Migration created  successfully');
    }

    public function createRequest(string $entityName): void
    {
        \Artisan::call('make:request '
            . $this->normalizePath(config('entity-scaffold.requests_path'))
            . $entityName . DIRECTORY_SEPARATOR . 'Store' . $entityName);
        $this->info('--- Request created  successfully');
    }

    public function createResource(string $entityName): void
    {
        \Artisan::call('make:resource '
            . $this->normalizePath(config('entity-scaffold.resources_path'))
            . $entityName . DIRECTORY_SEPARATOR . $entityName . 'Resource');

        \Artisan::call('make:resource '
            . $this->normalizePath(config('entity-scaffold.resources_path'))
            . $entityName . DIRECTORY_SEPARATOR . Str::plural($entityName) . 'Collection');
        $this->info('--- Resource created  successfully');
    }

    private function normalizePath($path): string
    {

        $latestCharacter = substr($path, -1);
        if ($latestCharacter === DIRECTORY_SEPARATOR) {
            return $path;
        }
        return $path . DIRECTORY_SEPARATOR;

    }
}
