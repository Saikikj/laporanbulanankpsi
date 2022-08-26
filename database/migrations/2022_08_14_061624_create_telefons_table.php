<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefons', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi');
            $table->string('negerizon');
            $table->string('jumlahtalian');
            $table->string('taliansimpanan');
            $table->string('kata');
            $table->string('katb');
            $table->string('katc');
            $table->string('faks');
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
        Schema::dropIfExists('telefons');
    }
}
