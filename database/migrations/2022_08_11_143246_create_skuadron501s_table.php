<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkuadron501sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skuadron501s', function (Blueprint $table) {
            $table->id();
            $table->string('peralatan');
            $table->string('model');
            $table->string('fungsi');
            $table->string('kuantiti');
            $table->string('status');
            $table->string('statuskeupayaan');
            $table->string('JMS');
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
        Schema::dropIfExists('skuadron501s');
    }
}
