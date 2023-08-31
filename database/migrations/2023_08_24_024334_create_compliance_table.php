<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplianceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compliance', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('DeptId');
            $table->integer('token_no');
            $table->string('subject');
            $table->string('title');
            $table->string('description');
            $table->integer('sender_id');
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
        Schema::dropIfExists('compliance');
    }
}
