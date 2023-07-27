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
            $table->string('laravel_version')->nullable();
            $table->string('php_version')->nullable();
            $table->boolean('is_auth')->default(false);
            $table->string('user')->nullable();
            $table->boolean('is_production')->nullable();
            $table->string('url')->nullable();
            $table->string('method')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('ip')->nullable();
            $table->string('base_path')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->string('timezone')->default('UTC');

            $table->integer('code')->nullable();
            $table->string('file')->nullable();
            $table->string('vendor')->nullable();
            $table->string('filename')->nullable();
            $table->integer('line')->nullable();
            $table->string('short_message')->nullable();
            $table->string('message')->nullable();
            $table->text('code_block')->nullable();
            $table->json('trace_string')->nullable();

            $table->boolean('is_read')->default(false);

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
