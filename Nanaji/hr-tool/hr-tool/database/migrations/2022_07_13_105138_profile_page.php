<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProfilePage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table->id();
        $table->string('name');
        $table->string('contact');
        $table->string('address');
        $table->string('email');
        $table->timestamp('dob');
        $table->string('Emp_id');
        $table->timestamp('date_of_joining');
        $table->string('company_name');
        $table->string('location');
        $table->string('employee_type');
        $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
