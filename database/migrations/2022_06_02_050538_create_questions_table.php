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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->text('name_ru');
            $table->text('name_uz')->nullable();
            $table->string('variant_1_ru');
            $table->string('variant_2_ru');
            $table->string('variant_3_ru');
            $table->string('variant_1_uz')->nullable();
            $table->string('variant_2_uz')->nullable();
            $table->string('variant_3_uz')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
};
