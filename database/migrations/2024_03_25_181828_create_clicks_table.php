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
        Schema::create('clicks', function (Blueprint $table) {
            $table->id();
            $table->string('user_agent')->unique();
            $table->string('referrer')->unique();
            $table->unsignedBigInteger('link_id');
            //Localization
            $table->ipAddress('ip')->default('undefined');
            $table->string('countryName')->default('undefined');
            $table->string('currencyCode')->default('undefined');
            $table->string('countryCode')->default('undefined');
            $table->string('regionCode')->default('undefined');
            $table->string('regionName')->default('undefined');
            $table->string('cityName')->default('undefined');
            $table->string('zipCode')->default('undefined');
            $table->string('latitude')->default('undefined');
            $table->string('longitude')->default('undefined');
            $table->string('areaCode')->default('undefined');
            $table->string('timezone')->default('undefined');
            //User-agent info
            $table->string('device')->default('undefined');
            $table->string('device_brand')->default('undefined');
            $table->string('device_model')->default('undefined');
            $table->string('platform')->default('undefined');
            $table->string('platform_version')->default('undefined');
            $table->string('browser_name')->default('undefined');
            $table->string('browser_version')->default('undefined');
            $table->string('country')->default('undefined');
            $table->timestamps();

            $table->foreign('link_id')->references('id')->on('links')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clicks');
    }
};
