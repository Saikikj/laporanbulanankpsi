<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGirnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('girns', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->string('jenisterminal');
            $table->string('jumlahpegangan');
            $table->string('baik');
            $table->string('rosak');
            $table->string('teb');
            $table->string('hilang');
            $table->string('lupus');
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
        Schema::dropIfExists('girns');
    }
}
