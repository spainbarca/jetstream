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
        Schema::create('taggables', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('taggable_id');
            $table->string('taggable_type');
            $table->unsignedBigInteger('tag_id');

            $table->foreign('tag_id')
                    ->references('id')->on('tags')
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
        Schema::dropIfExists('taggables');
    }
};
