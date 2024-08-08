<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamusTable extends Migration
{
    public function up()
    {
        Schema::create('tamus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('no');
            $table->string('gender');
            

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tamu');
    }
}

