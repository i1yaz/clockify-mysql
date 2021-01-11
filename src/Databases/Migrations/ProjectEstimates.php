<?php


namespace JDecool\Clockify\Databases\Migrations;

use Illuminate\Database\Capsule\Manager as DB;

class ProjectEstimates
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public static function up()
    {
        DB::schema()->dropIfExists('clockify_project_estimates');

        DB::schema()->create('clockify_project_estimates', function ($table) {
            $table->engine = $config['db_engine'];
            $table->string('projectId', 255);
            $table->string('estimate', 255)->nullable();
            $table->string('type', 255)->nullable();
        });
    }
}
