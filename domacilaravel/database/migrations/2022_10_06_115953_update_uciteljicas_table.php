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
        Schema::table('uciteljicas', function (Blueprint $table) {
            $table->after('prezime', function ($table) {
                $table->string('jmbg');
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
        Schema::table('uciteljicas', function (Blueprint $table) {
            $table->dropColumn('jmbg');
        });
    }
};
