<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNationalityIdToAthletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('athletes', function (Blueprint $table) {
            $table->unsignedBigInteger('nationality_id')->nullable();
            $table->foreign('nationality_id')
                ->references('id')
                ->on('nationalities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('athletes', function (Blueprint $table) {
            //
        });
    }
}
