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
        Schema::create('isian_kuesioners', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->tinyInteger('status_kepuasan')->default(0);
            $table->tinyInteger('kepuasan_q1')->nullable();
            $table->tinyInteger('kepuasan_q2')->nullable();
            $table->tinyInteger('kepuasan_q3')->nullable();
            $table->tinyInteger('kepuasan_q4')->nullable();
            $table->tinyInteger('kepuasan_q5')->nullable();
            $table->tinyInteger('kepuasan_q6')->nullable();
            $table->tinyInteger('kepuasan_q7')->nullable();
            $table->tinyInteger('kepuasan_q8')->nullable();
            $table->tinyInteger('kepuasan_q9')->nullable();
            $table->tinyInteger('kepuasan_q10')->nullable();
            $table->tinyInteger('status_perasaan')->default(0);
            $table->tinyInteger('perasaan_q1')->nullable();
            $table->tinyInteger('perasaan_q2')->nullable();
            $table->tinyInteger('perasaan_q3')->nullable();
            $table->tinyInteger('status_makna')->default(0);
            $table->tinyInteger('makna_q1')->nullable();
            $table->tinyInteger('makna_q2')->nullable();
            $table->tinyInteger('makna_q3')->nullable();
            $table->tinyInteger('makna_q4')->nullable();
            $table->tinyInteger('makna_q5')->nullable();
            $table->tinyInteger('makna_q6')->nullable();
            $table->tinyInteger('status_kebahagiaan')->default(0);
            $table->tinyInteger('kebahagiaan_q1')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('isian_kuesioner');
    }
};