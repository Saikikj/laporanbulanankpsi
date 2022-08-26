<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMktlVtcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mktl_vtcs', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('nosiricodec');
            $table->string('nosirimikrofon');
            $table->string('nosiricamera');
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
        Schema::dropIfExists('mktl_vtcs');
    }
}
