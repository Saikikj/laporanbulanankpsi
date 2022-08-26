<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGirnOperasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('girn_operasis', function (Blueprint $table) {
            $table->id();
            $table->string('peralatan');
            $table->string('jumlahpegangan');
            $table->string('hilang');
            $table->string('rosak');
            $table->string('far');
            $table->string('sediaguna');
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
        Schema::dropIfExists('girn_operasis');
    }
}
