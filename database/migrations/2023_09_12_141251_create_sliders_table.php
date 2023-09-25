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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->String('title');
            $table->String('title_ar');
            $table->String('description');
            $table->String('description_ar');
            $table->String('rediract_to');  //text_button
            $table->String('text_button');  //text_button
            $table->String('image');
            $table->boolean('active')->default(false);  //Publication period
            $table->json('publication_start');  //publication_time
            $table->json('publication_end');  //publication_time
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
