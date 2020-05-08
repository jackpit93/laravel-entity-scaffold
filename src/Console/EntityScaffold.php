<?php

namespace MohammadNaj\laravelEntityScaffold\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use MohammadNaj\laravelEntityScaffold\laravelEntityScaffold;

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

    protected $laravelEntityScaffold;

    public function __construct()
    {
        parent::__construct();
        $this->laravelEntityScaffold = new laravelEntityScaffold();

    }

    public function handle()
    {


        $entityName = ucfirst($this->Argument('entity'));

        $this->option('con')
            ? $this->warn(' -  -  - Ignore making the controller')
            : $this->laravelEntityScaffold->createController($entityName);

        $this->option('mod')
            ? $this->warn(' -  -  - Ignore making the model')
            : $this->laravelEntityScaffold->createModel($entityName);

        $this->option('mig')
            ? $this->warn(' -  -  - Ignore making the migration')
            : $this->laravelEntityScaffold->createMigration($entityName);

        $this->option('req')
            ? $this->warn(' -  -  - Ignore making the request')
            : $this->laravelEntityScaffold->createRequest($entityName);

        $this->option('res')
            ? $this->warn(' -  -  - Ignore making the resource')
            : $this->laravelEntityScaffold->createResource($entityName);

    }

}
