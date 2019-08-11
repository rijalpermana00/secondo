<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
                $table->string('name');
                $table->string('birthplace');
                $table->date('birthdate');
                $table->integer('nip');
                $table->integer('nik');
                $table->string('phone');
                $table->string('photo')->nullable();
                $table->string('gender');
                $table->string('address');
                $table->string('type')->nullable();
                $table->date('startdate')->nullable();
                $table->date('enddate')->nullable();
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
        Schema::dropIfExists('staff');
    }
}
