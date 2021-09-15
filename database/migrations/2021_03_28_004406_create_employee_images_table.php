<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_images', function (Blueprint $table) {
            $table->id();
            $table->string("profileImage")->nullable();
            $table->bigInteger('employeeid')->unsigned();
            $table->timestamps();
            $table->foreign('employeeid')
                    ->references('id')->on('employees')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_images');
    }
}
