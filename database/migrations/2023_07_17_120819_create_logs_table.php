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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string('app')->nullable();
            $table->string('env')->nullable();
            $table->boolean('is_production')->nullable();
            $table->string('url')->nullable();
            $table->string('method')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('ip')->nullable();
            $table->dateTime('date_time')->nullable();

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
        Schema::dropIfExists('logs');
    }
};
