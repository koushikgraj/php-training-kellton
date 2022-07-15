<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BankDetails', function (Blueprint $table) {
            $table->id();
            $table->string('account_type');
            $table->string('country');
            $table->string('ifsc_code');
            $table->string('contact');
            $table->string('name');
            $table->string('location');
            $table->integer('account_number');
            $table->string('created_by');
            $table->string('updated_by');
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
        Schema::dropIfExists('BankDetails');
    }
}
