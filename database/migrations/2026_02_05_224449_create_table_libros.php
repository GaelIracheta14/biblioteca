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
        Schema::create("categorias", function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', length: 250);
        });


        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', length: 250);
            $table->string('isbn', length: 100);
            $table->string('autor', length: 250);
            $table->string('editorial', length: 100);
            $table->smallInteger('estatus')->default(0);
            $table->unsignedBigInteger('categoria_id');
            $table->foreign("categoria_id")->references("id")->on("categorias")->onDelete("cascade");





        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
        Schema::dropIfExists('categorias');
    }
};
