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
            //Esto hace que se agregue esta columna NUEVA hasta el final
            //$table->string('avatar')->nullable();
            //Esto hace que se agregue la columna NUEVA en la posicion que necesitos que quede dentro de la tabla
            $table->string('avatar')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //Elimina la columna creada ROLLBACK
            $table->dropColumn('avatar');
        });
    }
};
