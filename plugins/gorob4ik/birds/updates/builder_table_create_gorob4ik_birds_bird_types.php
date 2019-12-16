<?php namespace Gorob4ik\Birds\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGorob4ikBirdsBirdTypes extends Migration
{
    public function up()
    {
        Schema::create('gorob4ik_birds_bird_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('bird_id');
            $table->integer('type_id');
            $table->primary(['bird_id','type_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gorob4ik_birds_bird_types');
    }
}
