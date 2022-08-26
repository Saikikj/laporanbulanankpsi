<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMawilla1LaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mawilla1_laptops', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->string('perjawatan');
            $table->string('notentera');
            $table->string('pangkat');
            $table->string('tred');
            $table->string('nama');
            $table->string('nosiri');
            $table->string('jenama');
            $table->string('tahun');
            $table->string('status');
            $table->string('sistem');
            $table->string('namauser');
            $table->string('processor');
            $table->string('ram');
            $table->string('operatingsystem');
            $table->string('msoffice');
            $table->string('rujukankewpa');
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
        Schema::dropIfExists('mawilla1_laptops');
    }
}
