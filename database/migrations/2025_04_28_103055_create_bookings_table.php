<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained()->cascadeOnDelete();
            $table->foreignId('mechanic_id')->nullable()->constrained()->nullOnDelete();
            $table->date('service_date');
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }

    
};
