<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperheroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superheroes', function (Blueprint $table) {
            $table->collation = 'utf8mb4_general_ci';
            $table->bigIncrements('id');
            $table->string('nickname​')->nullable();
            $table->string('real_name​')->nullable();
            $table->text('origin_description​')->nullable();
            $table->text('superpowers')->nullable();
            $table->text('catch_phrase')->nullable();
            $table->string('url_image')->nullable();
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
        Schema::dropIfExists('superheroes');
    }
}
