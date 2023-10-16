<?php

use App\Models\Client;
use App\Models\Salle;
use Illuminate\Database\Eloquent\SoftDeletes;
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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->timestamps();
            $table->SoftDeletes();
        });
        Schema::create('salles', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('adresse');
            $table->string('place');
            $table->timestamps();
            $table->SoftDeletes();
        });
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Client::class,'id_reservation');
            $table->date('date_reservation');
            $table->string('place_reservation');
            $table->integer('prix');
            $table->foreignIdFor(Salle::class);
            $table->timestamps();
            $table->SoftDeletes();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
        Schema::dropIfExists('salles');
        Schema::dropIfExists('reservations');
    }
};
