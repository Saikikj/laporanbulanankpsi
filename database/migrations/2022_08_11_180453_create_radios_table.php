<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radios', function (Blueprint $table) {
            $table->id();
            $table->string('kapalpangkalan');
            $table->string('unit');
            $table->string('jenisradio');
            $table->string('hf');
            $table->string('vuhf');
            $table->string('vhf');
            $table->string('baik');
            $table->string('rosak');
            $table->string('fitted');
            $table->string('portable');
            $table->string('ipnonip');
            $table->string('tahun');
            $table->string('usia');
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
        Schema::dropIfExists('radios');
    }
}
