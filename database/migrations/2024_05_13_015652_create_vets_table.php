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
		Schema::create('vets', function (Blueprint $table)
		{
			$table->id();
			$table->foreignId('user_id')->constrained()->onDelete('cascade');
			$table->string('name');
			$table->longText('description')->nullable();
			$table->string('photo')->nullable();
			$table->string('latitude')->nullable();
			$table->string('longitude')->nullable();
			$table->string('address')->nullable();
			$table->string('working_hours')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverses the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('vets');
	}
};
