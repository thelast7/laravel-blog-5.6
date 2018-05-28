<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name' => 'Bisnis',
        	'slug' => str_slug('Bisnis')
        ]);

        Category::create([
        	'name' => 'Berita',
        	'slug' => str_slug('Berita')
        ]);

        Category::create([
        	'name' => 'Olahraga',
        	'slug' => str_slug('Olahraga')
        ]);
    }
}
