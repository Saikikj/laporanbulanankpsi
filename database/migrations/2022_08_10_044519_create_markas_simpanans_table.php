<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarkasSimpanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markas_simpanans', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->string('perjawatan');
            $table->string('cpu');
            $table->string('monitor');
            $table->string('jenama');
            $table->string('tahun');
            $table->string('status');
            $table->string('terminalnc2');
            $table->string('namadaftar');
            $table->string('processor');
            $table->string('ram');
            $table->string('operatingsystem');
            $table->string('msoffice');
            $table->string('antivirus');
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
        Schema::dropIfExists('markas_simpanans');
    }
}
