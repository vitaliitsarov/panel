<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
			$table->bigInteger('offer_id');
			$table->string('name');
			$table->string('image')->nullable();
			//['active', 'unactive']
			$table->string('status')->default('unactive');
			$table->string('url')->nullable();
			$table->json('options')->nullable();
			$table->string('offer_type')->nullable();
			$table->bigInteger('sort')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
};
