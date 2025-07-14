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
        Schema::create('job_positions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

         DB::table('job_positions')->insert([
            ['name'=>'Operational Trainee', 'created_at'=> now(),'updated_at' => now()],
            ['name'=>'Management Trainee','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Lainnya','created_at'=>now(),'updated_at'=>now()],
           ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_positions');
    }
};
