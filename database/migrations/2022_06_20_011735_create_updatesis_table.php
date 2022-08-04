<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpdatesisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('updatesis', function (Blueprint $table) {
            $table->id();
            $table->string ('unit');
            $table->string ('jenisperalatan');
            $table->string ('penempatan');
            $table->string ('Jenama');
            $table->string ('CPU');
            $table->string ('Monitor');
            $table->string ('Tahun');
            $table->string ('PendaftaranAset');
            $table->string ('Status');
            $table->string ('Cadangan');
            $table->string ('Catatan',500);



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('updatesis');
    }
}
