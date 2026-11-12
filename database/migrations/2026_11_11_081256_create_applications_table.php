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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained('programs')->restrictOnDelete();
            $table->string('reference_no', 30)->unique();
            $table->string('first_name', 100);
            $table->string('middle_name', 100)->nullable();
            $table->string('last_name', 100);
            $table->date('birth_date');
            $table->string('sex', 10);
            $table->string('contact_no', 20);
            $table->text('address');
            $table->string('last_school_attended');
            $table->string('status', 20)->default('draft')->index();
            $table->text('remarks')->nullable();
            $table->timestamp('submitted_at')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
