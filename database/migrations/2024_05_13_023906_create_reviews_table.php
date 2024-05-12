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
		Schema::create('reviews', function (Blueprint $table)
		{
			$table->id();
			$table->foreignId('user_id')->constrained()->onDelete('cascade');
			$table->foreignId('vet_id')->constrained()->onDelete('cascade');
			$table->smallInteger('rate');
			$table->string('comment');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverses the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('reviews');
	}
};
