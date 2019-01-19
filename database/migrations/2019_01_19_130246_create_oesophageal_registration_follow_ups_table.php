<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOesophagealRegistrationFollowUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oesophageal_registration_follow_ups', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('recurrence');
            $table->date('recurrence_date');
            $table->json('recurrence_type');
            $table->json('health_status');
            $table->json('death_cause');

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
        Schema::dropIfExists('oesophageal_registration_follow_ups');
    }
}
