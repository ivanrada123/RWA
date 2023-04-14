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
        Schema::create('cijena', function (Blueprint $table) {
            $table->id();
            $table->string("Display");
            $table->string("Baterija");
            $table->string("Prikljucak punjaca");
            $table->string("Straznje staklo");
            $table->string("Maticna ploca");
               $table->unsignedBigInteger('mobitel_id');
            $table->foreign('mobitel_id')->references('id')->on('mobitel');         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
