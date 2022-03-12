<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJimpitanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jimpitan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('penyetor');
            $table->string('tidaksetor');
            $table->integer('jumlahsetoran');
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
        Schema::dropIfExists('jimpitan');
    }
}
