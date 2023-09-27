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
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('role_id')
                    ->references('id')->on('roles')
                    ->onDelete('cascade');

                    $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');

            $table->string('user_register')->default('admin');
            $table->ipAddress('visitor')->default('127.0.0.1');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_user');
    }
};
