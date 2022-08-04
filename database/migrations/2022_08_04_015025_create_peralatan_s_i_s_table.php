<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeralatanSISTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peralatan_s_i_s', function (Blueprint $table) {
            $table->id();
            $table->string('markas');
            $table->string('unit');
            $table->string('penempatan');
            $table->string('jenis');
            $table->string('cpu');
            $table->string('monitor');
            $table->integer('tahun');
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
        Schema::dropIfExists('peralatan_s_i_s');
    }
}
