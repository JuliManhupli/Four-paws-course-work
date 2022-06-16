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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('name');
            $table->foreignId('animal_id')->constrained()->onDelete('cascade');
            $table->float('age_value');
            $table->string('age');
            $table->foreignId('sex_id')->constrained()->onDelete('cascade');
            $table->string('breed');
            $table->text('description');
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
        Schema::dropIfExists('pets');
    }
};
