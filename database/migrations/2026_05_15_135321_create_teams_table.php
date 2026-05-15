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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string("Name");
            $table->string("City");
            $table->string("Stadium");
            $table->integer("Capacity");
            $table->year("Year_of_fundation");

            $table->timestamps();

            $table->unsignedBigInteger('president_id')->nullable()->unique();
            $table->foreign('president_id')
            ->references('id')
            ->on('presidents')
            ->onDelete('set null')
            ->onUpdate('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
