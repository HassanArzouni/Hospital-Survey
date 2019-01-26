<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('registration_diagnoses_id');
            $table->foreign('registration_diagnoses_id', 'rd_id_foreign')->references('id')->on('registration_diagnoses');

            $table->unsignedInteger('oesophageal_registration_follow_ups_id');
            $table->foreign('oesophageal_registration_follow_ups_id', 'orf_id_foreign')->references('id')->on('oesophageal_registration_follow_ups');

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
        Schema::table('surveys', function (Blueprint $table) {
            $table->dropForeign(['registration_diagnoses_id']);
            $table->dropForeign(['oesophageal_registration_follow_ups_id']);
        });

        Schema::dropIfExists('surveys');
    }
}
