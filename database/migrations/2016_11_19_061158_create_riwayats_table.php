<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('email')->nullable();
            $table->string('kontak')->nullable();
            $table->string('kerusakan')->nullable();
            $table->text('gejala')->nullable();
            $table->string('solusi')->nullable();
            $table->string('kepastian')->nullable();
            $table->decimal('nilai', 4, 3)->nullable();
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
        Schema::dropIfExists('riwayats');
    }
}
