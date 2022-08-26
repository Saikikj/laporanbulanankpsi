<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMklbSwitchroutersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mklb_switchrouters', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
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
        Schema::dropIfExists('mklb_switchrouters');
    }
}
