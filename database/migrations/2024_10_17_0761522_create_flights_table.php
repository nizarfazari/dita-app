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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('maintanance_require_task_reference');
            $table->string('MFG_task_card_reference');
            $table->text('description');
            $table->string('threshold');
            $table->string('interval');
            $table->date('forecast');

            $table->foreignId('last_done')->constrained('times')->cascadeOnDelete();
            $table->foreignId('next_due')->constrained('times')->cascadeOnDelete();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
