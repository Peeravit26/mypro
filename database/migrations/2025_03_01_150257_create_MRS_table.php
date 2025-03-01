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
        Schema::create('MRS', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            
            $table->string('title')->nullable();
        $table->date('repdate')->nullable();
        $table->string('addr')->nullable();
        $table->string('photo')->nullable();
        $table->string('phone')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MRS');
    }
};
