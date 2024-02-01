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
        Schema::create('comunities_encuesta', function (Blueprint $table) {
            $table->unsignedBigInteger('comunity_id');
            $table->unsignedBigInteger('encuesta_id');
            
            $table->foreign('comunity_id')->references('id')->on('comunities')->onDelete('cascade');
            $table->foreign('encuesta_id')->references('id')->on('encuestas')->onDelete('cascade');
        
            $table->primary(['comunity_id', 'encuesta_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comunities_encuesta');
    }
};
