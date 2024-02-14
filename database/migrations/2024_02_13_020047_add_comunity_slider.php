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
        Schema::table('slider_landing', function (Blueprint $table) {
            $table->unsignedBigInteger('comunity_id')->nullable();
            $table->foreign('comunity_id')->references('id')->on('comunities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('slider_landing', function (Blueprint $table) {
            //
        });
    }
};
