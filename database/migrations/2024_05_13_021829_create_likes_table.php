<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Runs the migrations.
	 */
	public function up(): void
	{
		Schema::create('likes', function (Blueprint $table)
		{
			$table->id();
			$table->foreignId('user_id')->constrained()->onDelete('cascade');
			$table->foreignId('vet_id')->constrained()->onDelete('cascade');
			$table->boolean('is_like');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverses the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('likes');
	}
};
