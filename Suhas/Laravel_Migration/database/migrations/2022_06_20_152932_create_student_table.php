<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void   
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id('student_id');         // we can custamise id name as per our requirement.
            $table->string('Name',25);
            $table->string('Dept',15);
            $table->string('Year',10);
            $table->string('email',30);
            $table->date('DOB')->nullable(); //if we dont want to tell dob.
            $table->enum('gender',["M","F"]);
            $table->text('Address');
            $table->timestamps(); //created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
};
