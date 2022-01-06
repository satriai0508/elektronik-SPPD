<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengikutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengikuts', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('umur');
            $table->enum('hubungan',['Kerabat','Keluarga','Junior','Senior'])->default('Keluarga');
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
        Schema::dropIfExists('pengikuts');
    }
}
