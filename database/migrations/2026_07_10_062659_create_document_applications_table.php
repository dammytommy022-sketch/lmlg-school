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
        Schema::create('document_applications', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('graduation_year');
            $table->date('dob');
            $table->string('class_teacher')->nullable();
            $table->string('document_type');
            $table->string('delivery_option');
            $table->string('identification_path')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_applications');
    }
};
