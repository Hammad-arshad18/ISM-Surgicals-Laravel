<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basicinfo', function (Blueprint $table) {
            $table->id();
            $table->string('email', 30);
            $table->string('phone_no', 20);
            $table->string("address", 100);
            $table->text("description");
            $table->string('facebook')->default(null)->nullable();
            $table->string('instagram')->default(null)->nullable();
            $table->string('twitter')->default(null)->nullable();
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
        Schema::dropIfExists('basicinfo');
    }
}
