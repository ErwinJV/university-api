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
        Schema::create('users_metadata', function (Blueprint $table) {
            $table->id();
            $table->string('telefono',50);
            $table->string('direccion');
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('perfil_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('perfil_id')->references('id')->on('perfil')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_metadata');
    }
};
