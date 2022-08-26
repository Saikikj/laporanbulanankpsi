<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMawilla1VtcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mawilla1_vtcs', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('nosiricodec');
            $table->string('nosirimikrofon');
            $table->string('nosiricamera');
            $table->string('nosiriremote');
            $table->string('poweradapter');
            $table->string('tahun');
            $table->string('status');
            $table->string('terminalnc2');
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
        Schema::dropIfExists('mawilla1_vtcs');
    }
}
