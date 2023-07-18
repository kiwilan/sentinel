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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('log_id')
                ->nullable()
                ->constrained()
                ->onDelete('cascade')
            ;
            $table->integer('code')->nullable();
            $table->string('file')->nullable();
            $table->integer('line')->nullable();
            $table->string('message')->nullable();
            $table->json('trace_string')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('error_messages');
    }
};
