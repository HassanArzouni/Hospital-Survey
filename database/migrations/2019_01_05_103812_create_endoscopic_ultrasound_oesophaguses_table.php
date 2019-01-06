<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEndoscopicUltrasoundOesophagusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endoscopic_ultrasound_oesophaguses', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('had_endoscopic_ultrasound');
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
        Schema::dropIfExists('endoscopic_ultrasound_oesophaguses');
    }
}
