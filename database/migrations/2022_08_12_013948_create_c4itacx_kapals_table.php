<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateC4itacxKapalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c4itacx_kapals', function (Blueprint $table) {
            $table->id();
            $table->string('kapal');
            $table->string('penempatan');
            $table->string('c4itacx');
            $table->string('baik');
            $table->string('rosak');
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
        Schema::dropIfExists('c4itacx_kapals');
    }
}
