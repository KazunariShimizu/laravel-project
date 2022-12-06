<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert('INSERT INTO books (isbn,title,price,publisher,published)VALUES("978-4-8222-5399-9","Visual C# 超入門",2000,"ジャパンIT","2022-08-22")');

    }
}
