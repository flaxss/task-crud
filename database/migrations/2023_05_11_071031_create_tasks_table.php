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
        Schema::create('tasks', function (Blueprint $table) {
            // $table->id();
            // $table->string('task')->nullable();
            // $table->string('description')->nullable();
            // $table->string('difficulty')->nullable();
            // $table->string('priority')->nullable();
            // $table->timestamps();

            $table->id();
            $table->string('task');
            $table->string('description');
            $table->string('difficulty');
            $table->string('priority');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
