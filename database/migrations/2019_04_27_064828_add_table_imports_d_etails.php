<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableImportsDEtails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('importDetails',function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_import')->unsigned();
            $table->foreign('id_import')->references('id')->on('imports');
            $table->dateTime('importDate');
            $table->json('data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
