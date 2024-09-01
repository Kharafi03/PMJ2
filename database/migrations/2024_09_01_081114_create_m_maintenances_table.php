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
        Schema::create('m_maintenances', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tipe nama
            $table->string('description', 255)->nullable(); // Deskripsi opsional
            $table->softDeletes(); // Kolom deleted_at
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_maintenances');
    }
};
