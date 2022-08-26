<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMawilla1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mawilla1s', function (Blueprint $table) {
            $table->id();
            // $table->string('jenis');
            $table->string('unit');
            $table->string('perjawatan');
            $table->string('nosiricpu');
            $table->string('nosirimonitor');
            $table->string('jenama');
            $table->string('tahun');
            $table->string('status');
            $table->string('terminalnc2');
            $table->string('namadaftar');
            $table->string('processor');
            $table->string('ram');
            $table->string('operatingsystem');
            $table->string('msoffice');
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
        Schema::dropIfExists('mawilla1s');
    }
}
