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
        Schema::create (' profile' , function (Blueprint $table) {
            $table->string('name');
            $table->string('email');
            $table->string('date');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('subject');
            $table->string('message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropifExists('profile');
    }
};
