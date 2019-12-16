<?php namespace Gorob4ik\Birds\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGorob4ikBirdsBirdsTypes6 extends Migration
{
    public function up()
    {
        Schema::table('gorob4ik_birds_birds_types', function($table)
        {
            $table->dropPrimary(['bird_id','type_id']);
        });
    }
    
    public function down()
    {
        Schema::table('gorob4ik_birds_birds_types', function($table)
        {
            $table->primary(['bird_id','type_id']);
        });
    }
}
