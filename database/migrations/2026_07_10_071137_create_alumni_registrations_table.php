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
        Schema::create('alumni_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('school_name');
            $table->string('current_name')->nullable();
            $table->string('class_set');
            $table->string('country');
            $table->string('contact')->nullable();
            $table->string('profession')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni_registrations');
    }
};
