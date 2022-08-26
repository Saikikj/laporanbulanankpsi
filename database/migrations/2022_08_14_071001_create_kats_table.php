<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kats', function (Blueprint $table) {
            $table->id();
            $table->string('penempatan');
            $table->string('markasunit');
            $table->string('kat2100');
            $table->string('kat3100');
            $table->string('kat3200');
            $table->string('kat3300');
            $table->string('skm700');
            $table->string('catatan');
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
        Schema::dropIfExists('kats');
    }
}
