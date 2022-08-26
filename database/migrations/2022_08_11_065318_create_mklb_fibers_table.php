<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMklbFibersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mklb_fibers', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->string('perjawatan');
            $table->string('notentera');
            $table->string('pangkat');
            $table->string('tred');
            $table->string('nama');
            $table->string('lokasi');
            $table->string('nosiri');
            $table->string('jenama');
            $table->string('tahun');
            $table->string('status');
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
        Schema::dropIfExists('mklb_fibers');
    }
}
