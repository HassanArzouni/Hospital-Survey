<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatmentPlanOesophagusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatment_plan_oesophaguses', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('discussed_moc');
            $table->date('discussed_moc_date');

            $table->enum('moc_treatment_plan', [
                'Therapy with curative option',
                'Therapy with palliative option'
            ]);

            $table->json('curative_therapy_type');

            $table->json('palliative_therapy_reason');
            $table->json('palliative_therapy_type');

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
        Schema::dropIfExists('treatment_plan_oesophaguses');
    }
}
