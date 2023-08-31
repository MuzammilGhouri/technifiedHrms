<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_experience', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id');
            $table->string('jobTitle');
            $table->string('companyName');
            $table->string('compLoc');
            $table->date('job_date_of_joining');
            $table->date('job_date_of_confirmation');
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
        Schema::dropIfExists('employee_experience');
    }
}
