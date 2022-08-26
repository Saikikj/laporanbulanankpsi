<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMawilla1CommsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mawilla1_comms', function (Blueprint $table) {
            $table->id();
            $table->string('peralatan');
            $table->string('jenistelephone');
            $table->string('nosiri');
            $table->string('tahun');
            $table->string('lokasi');
            $table->string('status');
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
        Schema::dropIfExists('mawilla1_comms');
    }
}
