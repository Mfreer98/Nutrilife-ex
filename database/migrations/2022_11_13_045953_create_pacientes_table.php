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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('user_id');
            $table->float('height')->nullable();
            $table->date('birthday');
            $table->unsignedInteger('nutricionist_id')->nullable();
            $table->float('weight')->nullable();
            $table->float('waist_hip_relationship')->nullable();
            $table->float('visceral_fat')->nullable();
            $table->float('body_fat')->nullable();
            $table->float('body_mass')->nullable();
            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('nutricionist_id')
                ->references('id')
                ->on('nutricionistas')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
};
