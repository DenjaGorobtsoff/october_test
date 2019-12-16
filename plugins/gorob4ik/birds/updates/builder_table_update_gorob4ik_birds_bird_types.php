<?php namespace Gorob4ik\Birds\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGorob4ikBirdsBirdTypes extends Migration
{
    public function up()
    {
        Schema::table('gorob4ik_birds_bird_types', function($table)
        {
            $table->dropPrimary(['bird_id','type_id']);
            $table->integer('birds_id');
            $table->integer('types_id');
            $table->dropColumn('bird_id');
            $table->dropColumn('type_id');
            $table->primary(['birds_id','types_id']);
        });
    }
    
    public function down()
    {
        Schema::table('gorob4ik_birds_bird_types', function($table)
        {
            $table->dropPrimary(['birds_id','types_id']);
            $table->dropColumn('birds_id');
            $table->dropColumn('types_id');
            $table->integer('bird_id');
            $table->integer('type_id');
            $table->primary(['bird_id','type_id']);
        });
    }
}
