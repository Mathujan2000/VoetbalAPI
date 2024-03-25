<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('spelers', function (Blueprint $table) {
            $table->Integer('id')->autoIncrement();
            $table->string('naam', 50)->nullable(false);
            $table->Integer('teamsid');
            $table->string('nationaliteit', 20)->nullable(true);
            $table->foreign('teamsid')->references('id')->on('teams')->restrictOnDelete();
    
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('spelers');
    }
    
};
