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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
        });

        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('date_of_delivery');
            $table->foreignId('project_id')->constrained();
        });

        Schema::create('flats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('area');
            $table->integer('rooms');
            $table->string('layout');
            $table->float('cost');
            $table->foreignId('house_id')->constrained();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flats');
        Schema::dropIfExists('houses');
        Schema::dropIfExists('projects');
    }
};
