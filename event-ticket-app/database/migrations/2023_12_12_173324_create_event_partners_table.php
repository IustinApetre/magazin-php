<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('event_partner', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('partner_id');
            // Alte detalii specifice legăturii, dacă sunt necesare

            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');
            // Aici adaugi cheile străine către tabelele aferente

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_partner');
    }
};
