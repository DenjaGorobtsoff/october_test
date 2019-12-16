<?php namespace Gorob4ik\Birds\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGorob4ikBirdsTypes extends Migration
{
    public function up()
    {
        Schema::table('gorob4ik_birds_types', function($table)
        {
            $table->renameColumn('type_bird', 'bird_type');
        });
    }
    
    public function down()
    {
        Schema::table('gorob4ik_birds_types', function($table)
        {
            $table->renameColumn('bird_type', 'type_bird');
        });
    }
}
