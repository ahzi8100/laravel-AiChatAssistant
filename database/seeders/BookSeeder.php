<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Categories
        $programming = Category::create(['name' => 'Programming']);
        $horror = Category::create(['name' => 'Horror']);
        $fiction = Category::create(['name' => 'Fiction']);
        $fantasy = Category::create(['name' => 'Fantasy']);

        // Create Book
        Book::create([
            'title' => 'The Pragmatic Programmer',
            'author' => 'Ahzi',
            'price' => 29.99,
            'category_id' => $programming->id,
        ]);

        Book::create([
            'title' => 'The Clean Coder',
            'author' => 'Ahzi',
            'price' => 19.99,
            'category_id' => $programming->id,
        ]);

        Book::create([
            'title' => 'Laravel & Vue JS',
            'author' => 'Ahzi',
            'price' => 42.99,
            'category_id' => $programming->id,
        ]);

        Book::create([
            'title' => 'The Lord of the rings',
            'author' => 'Ahzi',
            'price' => 1500,
            'category_id' => $fantasy->id,
        ]);

        Book::create([
            'title' => 'The Conjuring',
            'author' => 'James Wan',
            'price' => 500,
            'category_id' => $horror->id,
        ]);
    }
}
