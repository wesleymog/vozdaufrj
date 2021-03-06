<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('usuarios', function(Blueprint $table){
            $table->increments('id');
            $table->integer('dre');
            $table->string('nome');
            $table->string('predio');
            $table->string('id_curso');
            $table->string('login');
            $table->string('senha');
            $table->integer('nivel');
            $table->integer('avaliacao');
            $table->softDeletes();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('usuarios');
    }
}

