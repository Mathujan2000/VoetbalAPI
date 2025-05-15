<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('spelers', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->integer('leeftijd');
            $table->string('positie')->nullable();
            $table->foreignId('club_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('spelers');
    }
};
