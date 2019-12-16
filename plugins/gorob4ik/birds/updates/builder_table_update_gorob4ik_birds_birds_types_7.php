<?php namespace Gorob4ik\Birds\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGorob4ikBirdsBirdsTypes7 extends Migration
{
    public function up()
    {
        Schema::table('gorob4ik_birds_birds_types', function($table)
        {
            $table->renameColumn('bird_id', 'birds_id');
            $table->primary(['birds_id']);
        });
    }
    
    public function down()
    {
        Schema::table('gorob4ik_birds_birds_types', function($table)
        {
            $table->dropPrimary(['birds_id']);
            $table->renameColumn('birds_id', 'bird_id');
        });
    }
}
