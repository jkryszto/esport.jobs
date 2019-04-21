<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array('Administrative', 'Business Development', 'Creative', 'Community Management', 'Customer Service', 'Data', 'Events', 'Marketing', 'Product Management', 'Production', 'Project Management', 'Software Engineering');

        for($i = -1; $i++, $i < count($categories);)
        {
            DB::table('categories')->insert([
                'name' => $categories[$i],
                'alias' => str_slug($categories[$i], '-')
            ]);
        }
    }
}
