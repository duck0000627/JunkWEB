<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Savemoney extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savemoney', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('date');
            $table->string('item');
            $table->string('name');
            $table->string('price');
            $table->string('tips')->nullable();
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
        Schema::dropIfExists('savemoney');
    }
}
