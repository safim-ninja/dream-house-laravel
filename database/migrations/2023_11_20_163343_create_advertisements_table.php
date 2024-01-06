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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string('bed');
            $table->string('bath');
            $table->string('rent');
            $table->string('photo1');
            $table->string('photo2');
            $table->string('photo3');
            $table->string('photo4')->nullable();
            $table->string('photo5')->nullable();
            $table->boolean('submitted')->nullable()->default(false);
            $table->boolean('confirmation')->nullable()->default(false);
            $table->string('nid')->nullable()->default('null');
            $table->string('bill')->nullable()->default('null');
            $table->string('address')->nullable()->default('null');
            $table->string('area')->nullable()->default('null');
            $table->string('category')->nullable()->default('null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisements');
    }
};

// for advertisement
// $table->boolean('verification')->nullable()->default(false);
// $table->boolean('confirmed')->default(false);
