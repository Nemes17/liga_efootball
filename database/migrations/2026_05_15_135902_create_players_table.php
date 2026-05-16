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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string("Name");
            $table->string("Position");
            $table->timestamps();

            $table->unsignedBigInteger('team_id')->nullable()->unique();
            $table->foreign('team_id')
            ->references('id')
            ->on('teams')
            ->onDelete('set null')
            ->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
