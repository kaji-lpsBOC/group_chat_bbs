<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
            $category->name = 'スポーツ';
            $category->save();

        $category = new Category();
        $category->name = 'ゲーム';
        $category->save();

        $category = new Category();
        $category->name = '音楽';
        $category->save();

        $category = new Category();
        $category->name = '雑談';
        $category->save();

        $category = new Category();
        $category->name = 'その他';
        $category->save();
    }
}
