<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAturansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('aturans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kerusakan_kd', 4);
            $table->string('gejala_kd', 4);
            $table->string('solusi_kd',4);
            $table->decimal('mb', 3, 2);
            $table->decimal('md', 3, 2);
            $table->timestamps();

            $table->foreign('kerusakan_kd')
                ->references('kd')->on('kerusakans')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('gejala_kd')
                ->references('kd')->on('gejalas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('solusi_kd')
                ->references('kd')->on('solusis')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aturans');
    }
}
