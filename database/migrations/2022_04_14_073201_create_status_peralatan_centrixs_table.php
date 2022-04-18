<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusPeralatanCentrixsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_peralatan_centrixs', function (Blueprint $table) {
            $table->id();
            $table->string('penggunaan');
            $table->timestamps();
            $table->string('catatan');
        });
// }
//         Schema::create('status_peralatan_centrixs', function (Blueprint $table) {
//             $table->id();
//             $table->timestamps();
//         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_peralatan_centrixs');
    }
}
