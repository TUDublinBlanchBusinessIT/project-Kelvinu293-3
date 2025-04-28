<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('make', 30);
            $table->string('model', 30);
            $table->integer('year');
            $table->string('type', 30)->nullable();
            $table->string('transmission', 20)->nullable();
            $table->string('colour', 20)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
