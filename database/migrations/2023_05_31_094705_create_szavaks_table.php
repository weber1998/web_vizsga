<?php

use App\Models\Szavak;
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
        Schema::create('szavaks', function (Blueprint $table) {
            $table->id();
            $table->string("angol");
            $table->string("magyar");
            $table->foreignId("temaId")->references("id")->on("temas");
            $table->timestamps();
        });

        Szavak::create(['angol'=>'dog', 'magyar'=>'kutya', 'temaId'=>1]);
        Szavak::create(['angol'=>'cat', 'magyar'=>'macska', 'temaId'=>1]);
        Szavak::create(['angol'=>'frog', 'magyar'=>'béka', 'temaId'=>1]);

        Szavak::create(['angol'=>'CPU', 'magyar'=>'processzor', 'temaId'=>2]);
        Szavak::create(['angol'=>'keyboard', 'magyar'=>'billentyűzet', 'temaId'=>2]);
        Szavak::create(['angol'=>'mouse', 'magyar'=>'egér', 'temaId'=>2]);

        Szavak::create(['angol'=>'teacher', 'magyar'=>'tanár', 'temaId'=>3]);
        Szavak::create(['angol'=>'student', 'magyar'=>'diák', 'temaId'=>3]);
        Szavak::create(['angol'=>'classroom', 'magyar'=>'tanterem', 'temaId'=>3]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szavaks');
    }
};
