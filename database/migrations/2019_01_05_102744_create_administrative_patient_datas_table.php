<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrativePatientDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrative_patient_datas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('first_name');
            $table->string('last_name');
            $table->date('birth_date');
            $table->string('sex');
            $table->string('country');
            $table->string('city');
            $table->string('postal_code');
            $table->string('hospital');
            $table->string('niss_insz_number');

            $table->string('health_insurance_institution');
            $table->string('health_insurance_number');

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
        Schema::dropIfExists('administrative_patient_datas');
    }
}
