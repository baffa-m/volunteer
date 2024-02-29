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
        Schema::create('volunteer_events', function (Blueprint $table) {
            $table->id();
            $table->string('post_title');
            $table->string('description');
            $table->string('location');
            $table->string('responsibilities');
            $table->integer('post_openings');
            $table->foreignId('state_id')->references('id')->on('states')->onDelete('null');
            $table->foreignId('organization_id')->references('id')->on('organizations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteer_openings');
    }
};
