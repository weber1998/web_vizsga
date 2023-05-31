<?php

use App\Models\Tema;
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
        Schema::create('temas', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("temanev");
            $table->timestamps();
        });

        Tema::create(['temanev'=>'állatok']);
        Tema::create(['temanev'=>'IT']);
        Tema::create(['temanev'=>'School']);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temas');
    }
};
