<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOesophagusDiagnosisFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oesophagus_diagnosis_forms', function (Blueprint $table) {
            $table->increments('id');


            // id from comorbidity_history_oesophaguses
            // id from endoscopy_biopsy_oesophaguses
            // id from endoscopic_ultrasound_oesophaguses
            // id from endoscopic_resection_oesophaguses
            // id from tomography_ultrasound_oesophaguses
            // clinical_staging_oesophaguses
            // complications_oesophaguses
            // treatment_plan_oesophaguses
            // endoscopic_resection_therapy_oesophaguses




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
        Schema::dropIfExists('oesophagus_diagnosis_forms');
    }
}
