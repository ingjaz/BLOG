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
        Schema::table('users', function (Blueprint $table) {
            //Aqui estoy poniendo el cambio
            //$table->string('name', 150)->change();
            //Tambien podemos agregar propiedades
            $table->string('name', 150)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //Aqui pongo como estaba originalmente antes del cambio
            //$table->string('name', 255)->change();
            //Y podemos revertirlas las propiedades que agregamos
            $table->string('name', 150)->nullable(false)->change();
        });
    }
};
