<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->integer('priority')->nullable();
            $table->string('name')->nullable();
            $table->tinyInteger('status')->default(1); // 1 = Active, 0 = Inactive
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
