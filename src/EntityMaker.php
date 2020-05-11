<?php


namespace MohammadNaj\laravelEntityScaffold;


use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

trait  EntityMaker
{
    public function createController(string $entityName)
    {

        Artisan::call('make:controller '
            . $this->normalizePath(config('entity-scaffold.controllers_path'))
            . Str::plural($entityName) . 'Controller');
        $this->info('--- Controller created  successfully');
    }

    public function createModel(string $entityName)
    {
        Artisan::call('make:model '
            . $this->normalizePath(config('entity-scaffold.models_path'))
            . $entityName . DIRECTORY_SEPARATOR . $entityName);
        $this->info('--- Model created  successfully');
    }

    public function createMigration(string $entityName)
    {
        Artisan::call('make:migration create_' . Str::lower(Str::plural($entityName)) . '_table');
        $this->info('--- Migration created  successfully');
    }

    public function createRequest(string $entityName)
    {
        Artisan::call('make:request '
            . $this->normalizePath(config('entity-scaffold.requests_path'))
            . $entityName . DIRECTORY_SEPARATOR . 'Store' . $entityName);
        $this->info('--- Request created  successfully');
    }

    public function createResource(string $entityName)
    {

        Artisan::call('make:resource '
            . $this->normalizePath(config('entity-scaffold.resources_path'))
            . $entityName . DIRECTORY_SEPARATOR . $entityName . 'Resource');

        Artisan::call('make:resource '
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
