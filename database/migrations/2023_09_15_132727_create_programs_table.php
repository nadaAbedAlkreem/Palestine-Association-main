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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('image'); 
            $table->string('title'); 
            $table->string('title_ar'); 
            $table->string('brief'); 
            $table->string('brief_ar'); 
            $table->string('strategic_objective'); 
            $table->string('strategic_objective_ar'); 
            $table->string('special_objectives'); 
            $table->string('special_objectives_ar'); 
            $table->string('ativities_events'); 
            $table->string('ativities_events_ar'); 
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
