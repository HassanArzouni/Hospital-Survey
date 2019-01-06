<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEndoscopyBiopsyOesophagusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endoscopy_biopsy_oesophaguses', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('had_endoscopy_or_biopsy');
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
        Schema::dropIfExists('endoscopy_biopsy_oesophaguses');
    }
}
