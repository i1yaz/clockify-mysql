<?php

namespace JDecool\Clockify\Databases\Migrations;

use Illuminate\Database\Capsule\Manager as DB;

class Workspaces
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public static function up()
    {
      echo $config['db_engine'];
        DB::schema()->dropIfExists('clockify_workspaces');

        DB::schema()->create('clockify_workspaces', function ($table) {
            $table->engine = $config['db_engine'];
            $table->string('id', 255)->primary();
            $table->string('name', 255)->nullable();
            $table->string('imageUrl', 255)->nullable();
            $table->string('featureSubscriptionType', 255)->nullable();
        });
    }
}
