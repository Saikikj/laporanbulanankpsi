<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dems', function (Blueprint $table) {
            $table->id();
            $table->string('node');
            $table->string('penempatan');
            $table->string('hh');
            $table->string('uu');
            $table->string('unitnaungan');

            $table->string('ktikomp');
            $table->string('jenamakomp');
            $table->string('statuskomp');
            $table->string('tahunkomp');

            $table->string('ktiprinter');
            $table->string('jenamaprinter');
            $table->string('statusprinter');
            $table->string('tahunprinter');

            $table->string('ktiscanner');
            $table->string('jenamascanner');
            $table->string('statusscanner');
            $table->string('tahunscanner');

            $table->string('ktiaircond');
            $table->string('statusaircond');
            $table->string('tahunaircond');
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
        Schema::dropIfExists('dems');
    }
}
