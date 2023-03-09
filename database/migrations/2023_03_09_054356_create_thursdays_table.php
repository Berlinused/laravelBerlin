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
        Schema::create('thursdays', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('age');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thursdays');
    }
};

// db 直接新增以下三筆資料
// INSERT INTO `thursdays` (`id`, `created_at`, `updated_at`, `age`, `name`) VALUES (NULL, NULL, NULL, '20', 'amy')
// INSERT INTO `thursdays` (`id`, `created_at`, `updated_at`, `age`, `name`) VALUES (NULL, NULL, NULL, '19', 'bob')
// INSERT INTO `thursdays` (`id`, `created_at`, `updated_at`, `age`, `name`) VALUES (NULL, NULL, NULL, '18', 'sos')
