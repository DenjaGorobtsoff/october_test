<?php namespace Gorob4ik\Birds\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGorob4ikBirdsTypes extends Migration
{
    public function up()
    {
        Schema::create('gorob4ik_birds_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('type_bird', 100);
            $table->text('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gorob4ik_birds_types');
    }
}
