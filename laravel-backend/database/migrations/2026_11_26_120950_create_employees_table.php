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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
            ->unique()
            ->constrained('users')//combine the users field to the user table
            ->cascadeOnDelete();

            $table->foreignId('department_id')
            ->nullable()
            ->constrained('departments')
            ->nullOnDelete();

            $table->string('employee_code')->unique();

            $table->string('phone',15)->nullable();

            $table->string('designation')->nullable();

            $table->decimal('salary',12,2)->nullable();

            $table->date('joining_date')->nullable();

            $table->string('address')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
