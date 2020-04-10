<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataCovid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jml_otg');
            $table->integer('pantau');
            $table->integer('selesai_pantau');
            $table->integer('rawat_rs');
            $table->integer('rawat_rumah');
            $table->integer('rawat_sembuh');
            $table->integer('rawat');
            $table->integer('sembuh');
            $table->integer('meninggal');
            $table->integer('jml_perjalanan');
            $table->integer('jml_selesai');
            $table->integer('jml_pantau');
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
        Schema::dropIfExists('covid');
    }
}
