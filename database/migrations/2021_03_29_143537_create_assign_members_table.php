<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_members', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employeeid')->unsigned();
            $table->bigInteger('projectid')->unsigned();
            $table->timestamps();
            $table->foreign('employeeid')
                    ->references('id')->on('employees')
                    ->onDelete('cascade');
            $table->foreign('projectid')
                    ->references('id')->on('projects')
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
        Schema::dropIfExists('assign_members');
    }
}
