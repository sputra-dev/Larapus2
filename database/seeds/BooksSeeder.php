<?php

use App\Author;
use App\Book;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sample penulis
        $author1 = Author::create(['name'=>'Mohammad Fauzi Adhim']);
        $author2 = Author::create(['name'=>'Salim A. Fillah']);
        $author3 = Author::create(['name'=>'Aam Amiruddin']);

        //sample buku
        $book1 = Book::create(['title'=>'Allahuakbar', 'amount'=>3, 'author_id'=>$author1->id]);
        $book2 = Book::create(['title'=>'Boss Hayam', 'amount'=>1, 'author_id'=>$author2->id]);
        $book3 = Book::create(['title'=>'Cinta & Seks Rumah Tangga Muslim', 'amount'=>10, 'author_id'=>$author3->id]);
        $book4 = Book::create(['title'=>'Janda Desa Siliwangi', 'amount'=>20, 'author_id'=>$author3->id]);
    }
}
