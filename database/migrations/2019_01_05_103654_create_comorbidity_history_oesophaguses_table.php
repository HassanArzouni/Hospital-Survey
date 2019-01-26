<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComorbidityHistoryOesophagusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comorbidity_history_oesophaguses', function (Blueprint $table) {
            $table->increments('id');

            $table->date('comorbidity_determination_date');
            $table->float('weight', 5, 2);
            $table->float('weight_loss_per_month', 5, 2);
            $table->float('height', 5, 2);

            $table->json('charlson_comorbidity_index');
            $table->json('previous_surgery');

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
        Schema::dropIfExists('comorbidity_history_oesophaguses');
    }
}
