<?php

use App\Models\SlugCategory;
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
        Schema::create('slugs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(SlugCategory::class);
            $table->string('name');
            $table->boolean('prefixFrom')->default(false);
            $table->boolean('prefixTo')->default(false);
            $table->string('lPrice')->nullable();
            $table->string('hPrice')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slugs');
    }
};
