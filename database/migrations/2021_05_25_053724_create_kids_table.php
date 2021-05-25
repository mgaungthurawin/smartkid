<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kids', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('birthday')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('baby_name')->nullable();
            $table->string('subscribed_date')->nullable();
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
        Schema::dropIfExists('kids');
    }
}
