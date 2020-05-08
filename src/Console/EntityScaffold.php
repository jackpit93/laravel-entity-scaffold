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
    protected $signature = 'make:entity {entity : Name of the entity} 
                             {--con : Ignore making the controller}
                             {--mod : Ignore making the model}
                             {--mig : Ignore making the migration}
                             {--res : Ignore making the resource}
                             {--req : Ignore making the request}';


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

        $this->option('con')
            ? $this->warn(' -  -  - Ignore making the controller')
            : $this->createController($entityName);

        $this->option('mod')
            ? $this->warn(' -  -  - Ignore making the model')
            : $this->createModel($entityName);

        $this->option('mig')
            ? $this->warn(' -  -  - Ignore making the migration')
            : $this->createMigration($entityName);

        $this->option('req')
            ? $this->warn(' -  -  - Ignore making the request')
            : $this->createRequest($entityName);

        $this->option('res')
            ? $this->warn(' -  -  - Ignore making the resource')
            : $this->createResource($entityName);

    }

    public function createController(string $entityName)
    {
        \Artisan::call('make:controller '
            . $this->normalizePath(config('entity-scaffold.controllers_path'))
            . Str::plural($entityName) . 'Controllers');
        $this->info('--- Controller created  successfully');
    }

    public function createModel(string $entityName)
    {
        \Artisan::call('make:model '
            . $this->normalizePath(config('entity-scaffold.models_path'))
            . $entityName . DIRECTORY_SEPARATOR . $entityName);
        $this->info('--- Model created  successfully');
    }

    public function createMigration(string $entityName)
    {
        \Artisan::call('make:migration create_' . Str::lower(Str::plural($entityName)) . '_table');
        $this->info('--- Migration created  successfully');
    }

    public function createRequest(string $entityName)
    {
        \Artisan::call('make:request '
            . $this->normalizePath(config('entity-scaffold.requests_path'))
            . $entityName . DIRECTORY_SEPARATOR . 'Store' . $entityName);
        $this->info('--- Request created  successfully');
    }

    public function createResource(string $entityName)
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
