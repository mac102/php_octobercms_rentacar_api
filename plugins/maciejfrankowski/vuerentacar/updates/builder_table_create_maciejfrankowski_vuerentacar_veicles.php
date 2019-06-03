<?php namespace MaciejFrankowski\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMaciejfrankowskiVuerentacarVeicles extends Migration
{
    public function up()
    {
        Schema::create('maciejfrankowski_vuerentacar_veicles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('maciejfrankowski_vuerentacar_veicles');
    }
}
