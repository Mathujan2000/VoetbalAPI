<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->Integer('id')->autoIncrement();
            $table->string('naam', 20)->nullable(false)->unique();
            $table->string('datumopgericht', 20)->nullable(false)->unique();
            $table->string('competitie', 20)->nullable(false)->unique();

        });
    }

    public function down()
    {
        Schema::dropIfExists('teams');
    }

};
