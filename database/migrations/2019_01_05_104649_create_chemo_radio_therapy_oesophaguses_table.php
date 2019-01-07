<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChemoRadioTherapyOesophagusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chemo_radio_therapy_oesophaguses', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('has_nutritional_support');
            $table->enum('nutritional_support_details', [
                'Nasogastric tube',
                'Gastrostomy',
                'Jejunostomy'
            ]);

            $table->json('type_of_therapy');

            $table->json('scheme_of_therapy');

            $table->boolean('is_therapy_aborted');

            $table->boolean('had_complications_during_therapy');
            $table->json('complications_during_therapy_details');

            $table->boolean('is_moc_performed');
            $table->date('moc_performed_date');

            $table->json('reevaluation_moc');

            $table->string('clinical_re-staging_ct');
            $table->string('clinical_re-staging_cn');
            $table->string('clinical_re-staging_cm');

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
        Schema::dropIfExists('chemo_radio_therapy_oesophaguses');
    }
}
