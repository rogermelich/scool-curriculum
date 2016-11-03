<?php

namespace Scool\Curriculum\Providers;

use Illuminate\Support\ServiceProvider;

class CurriculumServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
            $this->loadMigrationsFrom(__DIR__.'../../database/migrations/2016_11_03_194238_create_studies_table.php');
    }

}