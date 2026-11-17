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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('destination')->nullable(); // Germany, Canada, UK, New Zealand, Other
            $table->string('qualification')->nullable();
            $table->string('service_interest')->nullable();
            $table->string('preferred_intake')->nullable();
            $table->text('message')->nullable();
            $table->string('status')->default('new'); // new, contacted, in_progress, enrolled, closed
            $table->text('admin_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};

