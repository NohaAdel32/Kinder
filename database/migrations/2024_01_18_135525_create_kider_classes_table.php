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
        Schema::create('kider_classes', function (Blueprint $table) {
            $table->id();
            $table->string('className',50);
            $table->tinyInteger('fromAge');
            $table->tinyInteger('toAge');
            $table->time('fromTime');
            $table->time('toTime');
            $table->tinyInteger('capacity');
            $table->Float('price');
            $table->string('image',100);
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->boolean('active');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kider_classes');
    }
};
