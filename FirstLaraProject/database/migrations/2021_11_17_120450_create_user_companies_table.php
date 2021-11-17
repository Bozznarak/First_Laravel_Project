<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_company', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('id_company');
            $table->foreign('id_company')->references('id')->on('company')->onDelete('cascade');

            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('user1')->onDelete('cascade');

            // $table->unsignedInteger('company_id');
            // $table->foreign('company_id')->references('id')->on('companys')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_companies');
    }
}
