<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEndoscopicResectionTherapyOesophagusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endoscopic_resection_therapy_oesophaguses', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('confirmation');

            $table->enum('differentiation_grade', [
                'Well differentiated',
                'Moderately differentiated',
                'Poorly differentiated',
                'Undifferentiated',
                'Unknown'
            ]);

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
        Schema::dropIfExists('endoscopic_resection_therapy_oesophaguses');
    }
}
