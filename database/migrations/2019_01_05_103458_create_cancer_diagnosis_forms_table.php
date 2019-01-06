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

            $this->string('primitive_tumor_location');

            $table->enum('lateral_even_organs_only', [
                'Left',
                'Right',
                'Unknown'
            ]);

            $this->string('histological_diagnosis');

            $table->enum('degree_of_differentiation', [
                'Great',
                'Medium',
                'Little',
                'Indifferent',
                'Unknown'
            ]);

            $this->string('tnm_clinic_ct');
            $this->string('tnm_clinic_cn');
            $this->string('tnm_clinic_cm');

            $this->string('tnm_pathological_pt');
            $this->string('tnm_pathological_pn');
            $this->string('tnm_pathological_pm');

            $this->string('other_clinical_stages');

            $this->date('date_of_first_treatment');

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
