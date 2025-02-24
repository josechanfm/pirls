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
        Schema::create('pickleball_rules', function (Blueprint $table) {
            $table->id();
            $table->string('level');
            $table->string('category');
            $table->string('subcategory');
            $table->string('minor');
            $table->text('question');
            $table->text('options');
            $table->string('currect');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pickleball_rules');
    }
};
