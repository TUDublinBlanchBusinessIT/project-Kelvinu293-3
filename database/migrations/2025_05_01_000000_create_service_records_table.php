<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_id');
            $table->unsignedBigInteger('mechanic_id');
            $table->text('description');
            $table->decimal('cost', 8, 2);
            $table->date('service_date');
            $table->timestamps();

            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
            $table->foreign('mechanic_id')->references('id')->on('mechanics')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_records');
    }
};
