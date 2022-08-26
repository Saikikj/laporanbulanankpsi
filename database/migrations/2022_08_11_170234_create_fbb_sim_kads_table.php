<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFbbSimKadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fbb_sim_kads', function (Blueprint $table) {
            $table->id();
            $table->string('markasunit');
            $table->string('idrujukan');
            $table->string('kuotadata');
            $table->string('nosimkad');
            $table->string('pakejlangganan');
            $table->string('tarikhtamatlangganan');
            $table->string('bakiquota');
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
        Schema::dropIfExists('fbb_sim_kads');
    }
}
