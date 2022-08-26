<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefonIbusawatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefon_ibusawats', function (Blueprint $table) {
            $table->id();
            $table->string('zon');
            $table->string('pasukanmarkas');
            $table->string('taliansimpanan');
            $table->string('negeri');
            $table->string('ibusawat');
            $table->string('console');
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
        Schema::dropIfExists('telefon_ibusawats');
    }
}
