<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class CreateAgencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('attitude');
            $table->string('longitude');
            $table->string('adresse');
            $table->unsignedBigInteger('pays_id');
            $table->foreign('pays_id')
            ->references('id')->on('pays')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // public function down()
    // {
    //     Schema::dropIfExists('agences');
    // }
}
