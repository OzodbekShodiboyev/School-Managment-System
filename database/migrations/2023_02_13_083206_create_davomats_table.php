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
        Schema::create('davomats', function (Blueprint $table) {
            $table->id();
            $table->string('Student');
            $table->string('10 Feb');
            $table->string('20 Feb');
            $table->string('1 March');
            $table->string('10 March');
            $table->string('20 March');
            $table->string('30 March');
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
        Schema::dropIfExists('davomats');
    }
};
