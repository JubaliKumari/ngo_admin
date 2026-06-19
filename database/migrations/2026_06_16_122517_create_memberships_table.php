<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('memberships', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('membership_type_id');

            $table->string('name');
            $table->string('phone');

            $table->decimal('amount', 10, 2);

            $table->date('purchase_date');
            $table->date('expiry_date');

            $table->string('payment_status')
                ->default('pending');

            $table->tinyInteger('status')
                ->default(1);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
