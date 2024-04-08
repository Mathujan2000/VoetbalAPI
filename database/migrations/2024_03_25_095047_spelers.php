<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('spelers', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('naam', 50)->nullable(false);
            $table->integer('teamsid');
            $table->string('nationaliteit', 20)->nullable(true);
            $table->foreign('teamsid')
                ->references('id')
                ->on('teams')
                ->restrictOnDelete(); // Corrected onDelete constraint
        });
    }

    public function down()
    {
        Schema::dropIfExists('spelers');
    }
};
