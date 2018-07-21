<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->string('address', 255)->nullable()->default(null);
            $table->string('contact_persons', 255)->nullable()->default(null);
            $table->string('contact_numbers', 255)->nullable()->default(null);
            $table->string('zone', 30)->nullable()->default(null);
            $table->string('district', 50)->nullable()->default(null);
            $table->string('division', 50)->nullable()->default(null);
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
        Schema::dropIfExists('locales');
    }
}
