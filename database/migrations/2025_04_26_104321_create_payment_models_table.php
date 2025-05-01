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
        Schema::create('payment_models', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('payer_name');
            $table->string('payer_email')->unique();
            $table->string('payment_type');
            $table->date('payment_date');
            $table->decimal('amount', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_models');
    }
};
