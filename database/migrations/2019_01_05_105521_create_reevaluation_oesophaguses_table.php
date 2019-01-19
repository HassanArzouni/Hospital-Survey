<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReevaluationOesophagusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reevaluation_oesophaguses', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('reevaluation_moc_performed');
            $table->date('reevaluation_moc_date');
            $table->json('further_therapy');

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
        Schema::dropIfExists('reevaluation_oesophaguses');
    }
}
