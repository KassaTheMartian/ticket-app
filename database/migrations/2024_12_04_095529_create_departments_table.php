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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->enum(column: 'status', allowed: ['active', 'deleted'])->nullable();
            $table->timestamps();
        });
        DB::table('departments')->insert([
            ['name' => 'HR', 'description' => 'Human Resources', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'IT', 'description' => 'Information Technology', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Finance', 'description' => 'Finance Department', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Marketing', 'description' => 'Marketing Department', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sales', 'description' => 'Sales Department', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
