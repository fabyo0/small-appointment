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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
            $table->foreignId('service_id');
            $table->foreignId('doctor_id');
            $table->tinyInteger('status')->default(0);
            $table->text('message')->nullable();
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->timestamps();
        });
    }

    //php artisan migrate:refresh --path=database/migrations/2023_05_15_131128_create_appointments_table.php

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
