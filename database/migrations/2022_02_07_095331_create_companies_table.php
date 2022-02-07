<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('companyName');
            $table->string('contactPerson');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('postalCode');
            $table->string('email');
            $table->string('phoneNumber');
            $table->string('mobileNumber');
            $table->string('fax');
            $table->string('websiteUrl');
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
        Schema::dropIfExists('companies');
    }
}
