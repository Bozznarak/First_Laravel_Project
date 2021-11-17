<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name');
            $table->longText('description');
            $table->timestamps();

            // something like this
            // $table->unsignedInteger('company_id');
            // $table->foreign('company_id')->references('id')->on('companys')->onDelete('cascade');

            //fkuser
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
