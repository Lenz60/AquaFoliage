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
        Schema::create('algae', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->string('species');
            $table->string('common_name');
            $table->string('difficulty');
            $table->string('causes');
            $table->text('excerpt');
            $table->text('causes_desc');
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('algae');
    }
};
