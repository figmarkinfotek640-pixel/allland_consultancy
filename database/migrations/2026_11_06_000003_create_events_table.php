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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('type'); // seminar, webinar, spot, fair, pre-departure
            $table->string('type_label')->default('Free Seminar');
            $table->date('event_date');
            $table->string('start_time'); // e.g. "10:00 AM"
            $table->string('end_time')->nullable(); // e.g. "1:00 PM"
            $table->string('location'); // e.g. "All Land office, Aluva" or "Online · Zoom"
            $table->string('mode')->default('offline'); // offline or online
            $table->text('description')->nullable();
            $table->string('registration_link')->nullable();
            $table->integer('seats_available')->default(50);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

