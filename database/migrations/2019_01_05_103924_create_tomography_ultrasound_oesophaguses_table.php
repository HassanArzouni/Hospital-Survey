<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTomographyUltrasoundOesophagusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tomography_ultrasound_oesophaguses', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('had_computed_tomography');
            $table->json('details');

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
        Schema::dropIfExists('tomography_ultrasound_oesophaguses');
    }
}
