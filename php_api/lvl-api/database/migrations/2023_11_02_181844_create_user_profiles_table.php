<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up() {
    Schema::create('user_profiles', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained()->onDelete('cascade');
      $table->string('display_name');
      $table->text('bio')->nullable();
      $table->string('profile_picture')->nullable();
      $table->string('background_picture')->nullable();
      $table->text('music')->nullable();
      $table->text('interests')->nullable();
      $table->string('website')->nullable();
      $table->string('location')->nullable();
      $table->date('birthday')->nullable();
      $table->string('relationship_status')->nullable();
      $table->timestamps();
    });
  }


  /**
   * Reverse the migrations.
   */
  public function down(): void {
    Schema::dropIfExists('user_profiles');
  }
};
