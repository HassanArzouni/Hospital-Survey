<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalStagingOesophagusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinical_staging_oesophaguses', function (Blueprint $table) {
            $table->increments('id');

            $table->string('clinical_staging_conclusion_ct');
            $table->string('clinical_staging_conclusion_cn');
            $table->string('clinical_staging_conclusion_cm');

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
        Schema::dropIfExists('clinical_staging_oesophaguses');
    }
}
