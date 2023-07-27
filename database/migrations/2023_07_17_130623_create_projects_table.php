<?php

use App\Enums\ProjectPriorityEnum;
use App\Enums\ProjectTypeEnum;
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
            $table->string('slug')->unique()->index();
            $table->string('url');
            $table->text('key');

            $table->boolean('is_enabled')->default(true);
            $table->boolean('with_notifications')->default(false);
            $table->boolean('use_discord')->default(false);
            $table->boolean('use_slack')->default(false);
            $table->boolean('use_mail')->default(false);
            $table->string('discord_token')->nullable();
            $table->string('slack_token')->nullable();
            $table->string('mail_token')->nullable();

            $table->enum('type', ProjectTypeEnum::toDatabase())->default(ProjectTypeEnum::laravel->value);
            $table->enum('priority', ProjectPriorityEnum::toDatabase())->default(ProjectPriorityEnum::low->value);
            $table->string('instance')->nullable();
            $table->text('comment')->nullable();
            $table->timestamp('last_log_datetime')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
