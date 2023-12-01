<?php

use App\Models\Evenement;
use App\Models\User;
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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->integer('references');
            $table->date('date_reservaton');
            $table->enum('etat',['accepter','ou_pas'])->default('accepter');
            $table->integer('nombre_reservation');
            $table->foreignIdFor(User::class)->nullable()->constrained()->onDelete('cascade');
            $table->foreignIdFor(Evenement::class)->nullable()->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
