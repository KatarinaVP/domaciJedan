<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('skolas', function (Blueprint $table) {
            $table->after('naziv', function ($table) {
                $table->string('kategorija_skole');
            });

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skolas', function (Blueprint $table) {
            $table->dropColumn('kategorija_skole');
        });
    }
};
