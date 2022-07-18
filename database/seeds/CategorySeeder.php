<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = config('discipline');
        $categories_list = $data['categories'];
        foreach ($categories_list as $category) {
            $new_categories = new Category();
            $new_categories->name = $category['name'];
            $new_categories->discipline = $category['discipline'];
            $new_categories->genre = $category['genre'];
            $new_categories->save();
        }
    }
}
