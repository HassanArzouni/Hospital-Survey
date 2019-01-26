<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCancerDiagnosisFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancer_diagnosis_forms', function (Blueprint $table) {
            $table->increments('id');

            $table->date('incident_date');

            $table->enum('means_of_diagnosis', [
                'Autopsy',
                'Primary Tumor Histology',
                'Histology Metastasis',
                'Cytology or Hematology',
                'Technical Examination',
                'Physical Examination',
                'Tumor Marker',
                'Unknown'
            ]);

            $table->enum('diagnostic_score', [
                'Asymptomatic, normal activity',
                'Symptomatic, but walking',
                'Symptomatic, bedridden < 50% of the day',
                'Symptomatic, bed > 50% of the day',
                'Completely dependent for care, bedridden'
            ]);

            $table->string('primitive_tumor_location');

            $table->enum('lateral_even_organs_only', [
                'Left',
                'Right',
                'Unknown'
            ]);

            $table->string('histological_diagnosis');

            $table->enum('degree_of_differentiation', [
                'Great',
                'Medium',
                'Little',
                'Indifferent',
                'Unknown'
            ]);

            $table->string('tnm_clinic_ct');
            $table->string('tnm_clinic_cn');
            $table->string('tnm_clinic_cm');

            $table->string('tnm_pathological_pt');
            $table->string('tnm_pathological_pn');
            $table->string('tnm_pathological_pm');

            $table->string('other_clinical_stages');

            $table->date('date_of_first_treatment');

            $table->json('treatments_already_received');
            $table->json('subsequent_treatment_plan');
            $table->json('justification');

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
        Schema::dropIfExists('cancer_diagnosis_forms');
    }
}
