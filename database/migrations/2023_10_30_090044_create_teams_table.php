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
            $table->engine = "InnoDB";
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('designation_id');
            $table->text('facebook_url')->nullable();
            $table->text('twitter_url')->nullable();
            $table->text('linkedin_url')->nullable();
            $table->text('instagram_url')->nullable();
            $table->text('pinterest_url')->nullable();
            $table->foreign('designation_id')->references('id')->on('designations')->onDelete('cascade');
            $table->timestamps();
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
