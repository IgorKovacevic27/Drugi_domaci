<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IzmenaTabeleKamion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('kamions',function (Blueprint $table){
        //     $table->renameColumn('opis','OPIS');
        // });
        // Schema::table('kamions', function (Blueprint $table) {
        //     vidi se u phpmysql-u, deo structure
        //     $table->string('gorivo', 40)->change();
        // });
        // Schema::table('kamions',function (Blueprint $table){
        //     $table->string('test');
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('kamions',function (Blueprint $table){
        //   $table->dropColumn('test');
        //   $table->renameColumn('OPIS','opis');
        //   });
    }
}
