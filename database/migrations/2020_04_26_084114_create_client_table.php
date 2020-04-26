<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('client', static function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->string('full_name', 250);
            $table->string('email', 250);
            $table->string('timezone', 250)->nullable();
            $table->integer('workspaces_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
}
