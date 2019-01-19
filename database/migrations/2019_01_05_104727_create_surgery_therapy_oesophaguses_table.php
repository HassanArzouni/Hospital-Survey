<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurgeryTherapyOesophagusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surgery_therapy_oesophaguses', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('surgery_performed');
            $table->date('date_of_surgery');
            $table->enum('surgery_intention', [
                'Primary',
  			 	'Post-induction',
			 	'Palliative'
            ]);
            $table->json('type_of_surgery');
            $table->enum('oesophagectomy', [
                'Partial',
 		 		'Subtotal',
 		 		'Total + laryngectomy'
            ]);
            $table->enum('type_of_oesophagectomy', [
                'Transthoracic',
                'Transhiatal'
            ]);
            $table->boolean('macroscopic_performed');
            $table->json('gastrectomy');
            $table->json('lymphadenectomy');
            $table->json('other_resections');
            $table->json('organ_reconstruction');
            $table->json('anastomosis');
            $table->decimal('peroperative_blood_loss');
            $table->boolean('transfusion_within_24_hours');
            $table->boolean('postoperative_complications');
            $table->json('type_of_postoperative_complication');
            $table->json('clavien_dindo_grade');
            $table->enum('Redo surgery', [
                'Take down conduit',
 	 	        'Delayed reconstruction',
		        'No redo surgery'
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
        Schema::dropIfExists('surgery_therapy_oesophaguses');
    }
}
