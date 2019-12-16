<?php namespace Gorob4ik\Birds\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGorob4ikBirdsBirdsTypes8 extends Migration
{
    public function up()
    {
        Schema::table('gorob4ik_birds_birds_types', function($table)
        {
            $table->dropPrimary(['birds_id']);
            $table->renameColumn('type_id', 'birds_type_id');
            $table->primary(['birds_id','birds_type_id']);
        });
    }
    
    public function down()
    {
        Schema::table('gorob4ik_birds_birds_types', function($table)
        {
            $table->dropPrimary(['birds_id','birds_type_id']);
            $table->renameColumn('birds_type_id', 'type_id');
            $table->primary(['birds_id']);
        });
    }
}
