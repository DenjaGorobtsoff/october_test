<?php namespace Gorob4ik\Birds\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGorob4ikBirds extends Migration
{
    public function up()
    {
        Schema::table('gorob4ik_birds_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('gorob4ik_birds_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
