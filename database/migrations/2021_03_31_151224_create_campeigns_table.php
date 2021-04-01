<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampeignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campeigns', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('body');
            $table->text('donatorname');
            $table->text('cname');
            $table->integer('amount');
            $table->text('campeigndate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campeigns');
    }
}
