<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DemoProspect extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospects', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('birthday');
            $table->string('job');
            $table->string('company');
            $table->string('add_number');
            $table->string('add_street');
            $table->string('add_zipcode');
            $table->string('add_city');
            $table->string('add_country');
            $table->string('telephone');
            $table->string('email')->unique();
            $table->unsignedInteger('fid');
            $table->timestamps();
        });
        
        Schema::create('comments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->text('text');
            $table->unsignedInteger('fid');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prospects');
        Schema::dropIfExists('comments');
    }
}
