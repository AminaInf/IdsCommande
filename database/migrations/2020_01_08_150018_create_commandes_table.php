<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->integer('articles_id');
            $table->foreign('articles_id')
                ->references('id')->on('articles');
            $table->date('date') ;
            $table->integer('team') ;
            $table->string('num_com') ;
            $table->string('entete') ;
            $table->string('specialite') ;
            $table->string('nom') ;
            $table->string('contact') ;
            $table->string('adress') ;
            $table->string('im_crea') ;
            $table->mediumText('image')->nullable();
            $table->date('date_livraison') ;
            $table->string('etat') ;
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
        Schema::dropIfExists('commandes');
    }
}
