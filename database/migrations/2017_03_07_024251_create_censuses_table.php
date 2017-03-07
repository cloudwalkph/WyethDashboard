<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCensusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('censuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('');
            $table->string('age')->default('');
            $table->string('mobile')->default('');
            $table->string('email')->default('');
            $table->string('promo_crayola_bunding')->default('0');
            $table->string('promo_zip_it')->default('0');
            $table->string('promo_none')->default('0');
            $table->string('created')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('censuses');
    }
}
