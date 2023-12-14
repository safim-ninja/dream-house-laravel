<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {

            // personal detailes
            $table->id();
            $table->string('name');
            $table->date('dob');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('photo')->nullable()->default('user.png');

            // for advertisement
            $table->boolean('submitted')->nullable()->default(false);
            $table->boolean('verification')->nullable()->default(false);
            $table->boolean('confirmed')->nullable()->default(false);
            $table->string('address')->nullable()->default('null');
            $table->string('area')->nullable()->default('null');
            $table->string('nid')->nullable()->default('null');
            $table->string('bill')->nullable()->default('null');

            $table->enum('role', ['admin', 'owner', 'user'])->default('user');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
