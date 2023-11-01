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
        Schema::create('page_settings', function (Blueprint $table) {
            $table->id();
            $table->text('logo')->nullable();
            $table->text('banner_title')->nullable();
            $table->text('banner_heading')->nullable();
            $table->text('banner_bief')->nullable();
            $table->smallInteger('happy_clients')->nullable();
            $table->smallInteger('experience')->nullable();
            $table->smallInteger('products')->nullable();
            $table->smallInteger('team_mumbers')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_contact')->nullable();
            $table->string('working_hour_start')->nullable();
            $table->string('working_hour_end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_settings');
    }
};
