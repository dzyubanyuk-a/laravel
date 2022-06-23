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
    public function up(): void
    {
        Schema::create('pastes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('paste');
            /*$table->unsignedBigInteger('language_id');*/
            $table->foreignId('language_id')->constrained();
            $table->foreignId('access_id')->constrained();
            $table->foreignId('activity_id')->constrained();
           /* $table->unsignedBigInteger('access_id');
            $table->unsignedBigInteger('activity_id');*/
            $table->string('token');
            $table->integer('user_id');
            $table->timestamps();

            $table->softDeletes();

            /*$table->foreign('language_id')->references('id')->on('languages');*/
           /* $table->foreign('access_id')->references('id')->on('accesses');
            $table->foreign('activity_id')->references('id')->on('activities');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('pastes');
    }
};
