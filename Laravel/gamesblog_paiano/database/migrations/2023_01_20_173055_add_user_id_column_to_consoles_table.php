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
        Schema::table('consoles', function (Blueprint $table) {
            //Dobbiamo inserire una colonna che contenga una chiave esterna
            $table->unsignedBigInteger('user_id')->after('description')->default(1);
            $table->foreign('user_id')->references('id')->on('users');

            //Crea una nuova colonna che accetti un numero senza un segno chiamate "user_id"
            //Rendi questa colonna una foreign key che faccia riferimento alla colonna "ID" della tabella "Users"
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consoles', function (Blueprint $table) {
            //Prima sciogliere la foreign key e poi cancellare la colonna
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
