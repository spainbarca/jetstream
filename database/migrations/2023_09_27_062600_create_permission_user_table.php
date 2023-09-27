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
        Schema::create('permission_user', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('permission_id');
            $table->unsignedBigInteger('role_id');

            $table->foreign('permission_id')
                    ->references('id')->on('permissions')
                    ->onDelete('cascade');

                    $table->foreign('role_id')
                    ->references('id')->on('roles')
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
        Schema::dropIfExists('permission_user');
    }
};
