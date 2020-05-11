<?php

namespace MohammadNaj\laravelEntityScaffold\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use MohammadNaj\laravelEntityScaffold\EntityMaker;

class EntityScaffold extends Command
{
use EntityMaker;
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

    private $entity;
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


}
