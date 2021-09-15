<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->integer('phonenumber')->unique();        
            $table->string('fathername');
            $table->string('mothername');
            $table->string('homenumber');
            $table->string('meritalstatus');
            $table->string('gender');
            $table->date('dob');
            $table->integer('nidNumber');
            $table->string('nationality');
            $table->string('country');
            $table->integer('divisionid');
            $table->integer('districtid');
            $table->integer('Thanaid');
            $table->integer('unionId');
            $table->integer('villageid');
            $table->string('Paddress');
            $table->string('currentaddress');
            $table->string('volunteerid')->unique();
            $table->string('employeeType');
            $table->date('joingdate');
            $table->integer('status');
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
        Schema::dropIfExists('volunteers');
    }
}
