<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('email_verifications', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('email');
            $table->string('verification_code');
            $table->timestamp('expires_at');
            $table->boolean('is_used')->default(false);
            $table->timestamps();
            
            $table->index(['email', 'verification_code']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('email_verifications');
    }
};
