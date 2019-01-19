<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationDiagnosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_diagnoses', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('administrative_patient_datas_id');
            $table->foreign('administrative_patient_datas_id')->references('id')->on('administrative_patient_datas');

            $table->unsignedInteger('cancer_diagnosis_forms_id');
            $table->foreign('cancer_diagnosis_forms_id')->references('id')->on('cancer_diagnosis_forms');

            $table->unsignedInteger('oesophagus_diagnosis_forms_id');
            $table->foreign('oesophagus_diagnosis_forms_id')->references('id')->on('oesophagus_diagnosis_forms');

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
        Schema::table('registration_diagnoses', function (Blueprint $table) {
            $table->dropForeign(['administrative_patient_datas_id']);
            $table->dropForeign(['cancer_diagnosis_forms_id']);
            $table->dropForeign(['oesophagus_diagnosis_forms_id']);
        });

        Schema::dropIfExists('registration_diagnoses');
    }
}
