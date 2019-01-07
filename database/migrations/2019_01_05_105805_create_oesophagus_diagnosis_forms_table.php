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

            $table->unsignedInteger('comorbidity_history_oesophaguse_id');
            $table->foreign('comorbidity_history_oesophaguse_id')->references('id')->on('comorbidity_history_oesophaguses');

            $table->unsignedInteger('endoscopy_biopsy_oesophaguse_id');
            $table->foreign('endoscopy_biopsy_oesophaguse_id')->references('id')->on('endoscopy_biopsy_oesophaguses');

            $table->unsignedInteger('endoscopic_ultrasound_oesophaguse_id');
            $table->foreign('endoscopic_ultrasound_oesophaguse_id')->references('id')->on('endoscopic_ultrasound_oesophaguses');

            $table->unsignedInteger('endoscopic_resection_oesophaguse_id');
            $table->foreign('endoscopic_resection_oesophaguse_id')->references('id')->on('endoscopic_resection_oesophaguses');

            $table->unsignedInteger('tomography_ultrasound_oesophaguse_id');
            $table->foreign('tomography_ultrasound_oesophaguse_id')->references('id')->on('tomography_ultrasound_oesophaguses');

            $table->unsignedInteger('clinical_staging_oesophaguse_id');
            $table->foreign('clinical_staging_oesophaguse_id')->references('id')->on('clinical_staging_oesophaguses');

            $table->unsignedInteger('complications_oesophaguse_id');
            $table->foreign('complications_oesophaguse_id')->references('id')->on('complications_oesophaguses');

            $table->unsignedInteger('treatment_plan_oesophaguse_id');
            $table->foreign('treatment_plan_oesophaguse_id')->references('id')->on('treatment_plan_oesophaguses');

            $table->unsignedInteger('endoscopic_resection_therapy_oesophaguse_id');
            $table->foreign('endoscopic_resection_therapy_oesophaguse_id')->references('id')->on('endoscopic_resection_therapy_oesophaguses');

            $table->unsignedInteger('chemo_radio_therapy_oesophaguse_id');
            $table->foreign('chemo_radio_therapy_oesophaguse_id')->references('id')->on('chemo_radio_therapy_oesophaguses');




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
        Schema::table('oesophagus_diagnosis_forms', function (Blueprint $table) {
            $table->dropForeign(['comorbidity_history_oesophaguse_id']);
            $table->dropForeign(['endoscopy_biopsy_oesophaguse_id']);
            $table->dropForeign(['endoscopic_ultrasound_oesophaguse_id']);
            $table->dropForeign(['endoscopic_resection_oesophaguse_id']);
            $table->dropForeign(['tomography_ultrasound_oesophaguse_id']);
            $table->dropForeign(['clinical_staging_oesophaguse_id']);
            $table->dropForeign(['complications_oesophaguse_id']);
            $table->dropForeign(['treatment_plan_oesophaguse_id']);
            $table->dropForeign(['endoscopic_resection_therapy_oesophaguse_id']);
            $table->dropForeign(['chemo_radio_therapy_oesophaguse_id']);
        });

        Schema::dropIfExists('oesophagus_diagnosis_forms');
    }
}
