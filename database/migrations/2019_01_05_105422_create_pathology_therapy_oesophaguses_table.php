<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePathologyTherapyOesophagusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pathology_therapy_oesophaguses', function (Blueprint $table) {
            $table->increments('id');

            $table->decimal('macroscopy_length');
            $table->decimal('macroscopy_width');

            $table->json('macroscopic_barrett');
            $table->string('histological_diagnosis_primary_tumor');
            $table->boolean('barrett_oesophagus');

            $table->enum('primary_tumor_differentiation', [
                'Well differentiated',
                'Moderately differentiated',
                'Poorly differentiated',
                'Undifferentiated',
                'Unknown'
            ]);

            $table->boolean('lymphatic_invasion');
            $table->boolean('vascular_invasion');
            $table->boolean('neural_invasion');

            $table->string('resected_lymph_nodes_number');
            $table->string('positive_lymph_nodes_number');
            $table->boolean('extracapsular_involvement');

            $table->string('metastasis_localisation');

            $table->json('microscopy_pt');
            $table->enum('microscopy_pn', [1, 2, 3]);
            $table->enum('microscopy_pm', [0, 1]);

            $table->boolean('ypTNM_concern');

            $table->enum('Mandard grade on T', [
                'TRG 1',
                'TRG 2',
                'TRG 3',
                'TRG 4',
                'TRG 5'
            ]);

            $table->string('final_pathological_pt');
            $table->string('final_pathological_pn');
            $table->string('final_pathological_pm');
            $table->enum('final_pathological_r', [0, 1]);

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
        Schema::dropIfExists('pathology_therapy_oesophaguses');
    }
}
