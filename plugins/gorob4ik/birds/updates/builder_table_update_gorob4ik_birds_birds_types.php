<?php namespace Gorob4ik\Birds\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGorob4ikBirdsBirdsTypes extends Migration
{
    public function up()
    {
        Schema::rename('gorob4ik_birds_bird_types', 'gorob4ik_birds_birds_types');
    }
    
    public function down()
    {
        Schema::rename('gorob4ik_birds_birds_types', 'gorob4ik_birds_bird_types');
    }
}
