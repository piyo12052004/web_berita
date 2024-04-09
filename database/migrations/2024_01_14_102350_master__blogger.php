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
        Schema::create('master_bloger', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->longtext('image_url');
            $table->longText('content');
            $table->timestamp('last_updated_at')->nullable();
            $table->string('blogger_post_id')->nullable();
            $table->string('blogger_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('master_bloger', function (Blueprint $table) {
            $table->dropColumn('last_updated_at');
        });
    }
};
