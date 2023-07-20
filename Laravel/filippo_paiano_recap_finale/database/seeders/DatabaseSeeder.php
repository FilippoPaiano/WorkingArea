<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            ["L'analista", "John Katzenbach"],
            ["Berserk", "Kentaro Miura"],
            ["Pattuglia Bravo Two Zero", "Andy McNab"],
            ["Elric di Melniboné", "Micheal Moorcock"],
            ["Il Signore degli Anelli", "J.R.R. Tolkien"],
            ["Il Mastino dei Baskerville", "Arthur Conan Doyle"],
            ["Il Necronomicon", "H.P. Lovecraft"],
            ["Assassinio sull'Orient Express", "Agatha Christie"],
            ["I Pilastri della Terra", "Ken Follet"],
            ["Rainbow Six", "Tom Clancy"],
            ["Tre cuori e tre leoni", "Poul Anderson"]

        ];

        foreach($books as $book){
            DB::table('books')->insert([
                'title' => $book[0],
                'author' => $book[1],
            ]);
        }
    }
}
