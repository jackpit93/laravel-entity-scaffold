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

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $entityName =ucfirst($this->Argument('entity'));

        \Artisan::call('make:controller '.Str::plural($entityName).'Controllers');
        $this->info('--- Controller created  successfully');

        \Artisan::call('make:model Models/'.$entityName.'/'.$entityName .' -m');
        $this->info('--- Model created  successfully');
        $this->info('--- Migration created  successfully');

        \Artisan::call('make:request '.$entityName.'/Store'.$entityName);
        $this->info('--- Request created  successfully');

        \Artisan::call('make:resource '.$entityName.'/'.$entityName.'Resource');
        \Artisan::call('make:resource '.$entityName.'/'.Str::plural($entityName) .'Collection');
        $this->info('--- Resource created  successfully');


        $this->info('=== Everything was done right');
    }
}
