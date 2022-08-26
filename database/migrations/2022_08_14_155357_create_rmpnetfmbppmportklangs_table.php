<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmpnetfmbppmportklangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rmpnetfmbppmportklangs', function (Blueprint $table) {
            $table->id();
            $table->string('markasunit');
            $table->string('fitted');
            $table->string('mobile');
            $table->string('portable');
            $table->string('status');
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
        Schema::dropIfExists('rmpnetfmbppmportklangs');
    }
}
