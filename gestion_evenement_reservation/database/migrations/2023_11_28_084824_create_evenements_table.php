<?php

use App\Models\Association;
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
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('nomEvenement');
            $table->longText('description');
            $table->enum('status',['cloturer','ou_pas_cloturer']);
            $table->string('image');
            $table->date('date_limite_inscription');
            $table->date('date_evenement');
            $table->boolean('is_deleted')->default('0'); 
            $table->foreignIdFor(Association::class)->nullable()->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenements');
    }
};
