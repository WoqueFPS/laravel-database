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
        Schema::table('planets', function (Blueprint $table) {
            $table->unsignedBigInteger('solar_system_id')->nullable();
            $table->foreign('solar_system_id')
                ->references('id')
                ->on('solar_systems')
                ->onDelete('set null');
        });

    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('planets', function (Blueprint $table) {
            $table->dropForeign(['solar_system_id']);
            $table->dropColumn('solar_system_id');
        });
    }
};
