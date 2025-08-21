<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('category_id')->nullable(true);
            // Assuming 'categories' is the name of the foreign table
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');
            $table->string('content', 200)->nullable(true);
            $table->text('slug')->nullable(true);
            $table->tinyInteger('is_published')->default(1);
            $table->integer('inserted_by')->nullable(true);
            $table->integer('updated_by')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
