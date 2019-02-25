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
        Schema::create('commercial', function(Blueprint $table)
        {
            $table->increments('clef');
            $table->string('login');
            $table->string('password');
            $table->string('prenom');
            $table->string('nom');
            $table->string('adr_numero');
            $table->string('adr_rue');
            $table->string('adr_codepostal');
            $table->string('adr_ville');
            $table->string('telephone');
            $table->string('email')->unique();
            $table->timestamps();
        });
        
        Schema::create('prospect', function(Blueprint $table)
        {
            $table->increments('clef');
            $table->string('prenom');
            $table->string('nom');
            $table->string('naissance');
            $table->string('profession');
            $table->string('entreprise');
            $table->string('adr_numero');
            $table->string('adr_rue');
            $table->string('adr_codepostal');
            $table->string('adr_ville');
            $table->string('adr_pays');
            $table->string('telephone');
            $table->string('email')->unique();
            $table->unsignedInteger('fclef');
            $table->timestamps();
        });
        
        Schema::create('commentaire', function(Blueprint $table)
        {
            $table->increments('clef');
            $table->string('titre');
            $table->text('texte');
            $table->unsignedInteger('fclef');
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
        Schema::drop('commercial');
        Schema::drop('prospect');
        Schema::drop('commentaire');
    }
}
