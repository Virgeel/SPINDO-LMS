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
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

         DB::table('types')->insert([
            ['name'=>'Video', 'created_at'=> now(),'updated_at' => now()],
            ['name'=>'Text','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Audio','created_at'=>now(),'updated_at'=>now()],
           ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types');
    }
};
