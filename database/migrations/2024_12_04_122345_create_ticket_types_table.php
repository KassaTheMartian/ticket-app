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
        Schema::create('ticket_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum(column: 'status', allowed: ['active', 'deleted'])->default('active');
            $table->timestamps();
        });

        DB::table('ticket_types')->insert([
            ['name' => 'Repair', 'description' => 'Ticket type for repair', 'status' => 'active'],
            ['name' => 'Replacement', 'description' => 'Ticket type for replacement', 'status' => 'active'],
            ['name' => 'Maintenance', 'description' => 'Ticket type for maintenance', 'status' => 'active'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_types');
    }
};
