<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('topic_id');
            $table->tinyInteger('sequence');
            $table->string('type')->nullable(); //GUIDE, QUESTION
            $table->string('leadable_type')->nullable(); // This creates leadable_id and leadable_type
            $table->foreignId('leadable_id')->nullable(); // This creates leadable_id and leadable_type
            $table->string('url')->nullable();
            $table->string('image')->nullable();
            $table->text('content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
