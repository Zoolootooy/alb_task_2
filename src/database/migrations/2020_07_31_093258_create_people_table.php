<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('firstname',255);
            $table->string('lastname',255);
            $table->date('birthdate');
            $table->string('rep_subject',255);

            $table->foreignId('country_id');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->string('phone', 50);
            $table->string('email', 70)->unique();
            $table->string('company', 70)->nullable();
            $table->string('position', 100)->nullable();
            $table->text('about')->nullable();
            $table->string('photo', 255)->nullable();

            $table->boolean('show')->default(true);

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
        Schema::dropIfExists('people');
    }
}
