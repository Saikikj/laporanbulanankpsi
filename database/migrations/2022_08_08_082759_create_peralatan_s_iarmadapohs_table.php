<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeralatanSIarmadapohsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peralatan_s_iarmadapohs', function (Blueprint $table) {
            $table->id();
            $table->string('lokasiwilayah');
            $table->string('markas');
            $table->string('unit');
            $table->string('penempatan');
            $table->string('jenis');
            $table->string('jenama');
            $table->string('cpu');
            $table->string('monitor');
            $table->string('tahun');
            $table->string('nopendaftaranasetkewpa');
            $table->string('status');
            $table->string('cadangan');
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
        Schema::dropIfExists('peralatan_s_iarmadapohs');
    }
}
