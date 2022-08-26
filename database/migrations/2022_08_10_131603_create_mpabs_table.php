<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpabs', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->string('perjawatan');
            $table->string('notentera');
            $table->string('pangkat');
            $table->string('tred');
            $table->string('nama');
            $table->string('lokasi');
            $table->string('bilcpu');
            $table->string('bilmonitor');
            $table->string('bilmouse');
            $table->string('bilkeyboard');
            $table->string('nosiricpu');
            $table->string('nosirimonitor');
            $table->string('jenama');
            $table->string('tahun');
            $table->string('status');
            $table->string('linep4');
            $table->string('namauser');
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
        Schema::dropIfExists('mpabs');
    }
}
