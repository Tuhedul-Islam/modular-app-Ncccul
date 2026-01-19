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
        Schema::create('financial_years', function (Blueprint $table) {
            $table->id();
            $table->integer('priority')->nullable();
            $table->string('name')->nullable();               
            $table->date('start_date')->nullable();           
            $table->date('end_date')->nullable();          
            $table->boolean('is_current')->default(0);
               $table->tinyInteger('status')->default(1)->comment('1=Active, 0=Inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financial_years');
    }
};
