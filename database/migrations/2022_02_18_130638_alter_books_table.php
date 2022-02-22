<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('books', function (Blueprint $table) {
                $table->unsignedBigInteger('genre_id')->nullable(); // UNSIGNED INTEGER un livre peut ne pas avoir de genre
                $table->foreign('genre_id')->references('id')->on('genres')->onDelete('SET NULL');
            });    
            // $table->unsignedInteger('genre_id')->nullable(); // UNSIGNED INTEGER un livre peut ne pas avoir de genre
            // $table->foreign('genre_id')->references('id')->on('genres'); // Contrainte référencé sur la table genres
    }    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign('books_genre_id_foreign');
            $table->dropColumn('genre_id');
        });
    }
}
