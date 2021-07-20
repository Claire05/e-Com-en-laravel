<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name'=>'Oppo mobile',
            'price'=>'300',
            'description'=>'A smartphone with 8gb ram and much more features',
            'category'=>'mobile',
            'gallery'=>'https://images.unsplash.com/photo-1580910051074-3eb694886505?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8cGhvbmV8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80'],
            ['name'=>'Laptop',
            'price'=>'400',
            'description'=>'A Laptop with 32gb ram and much more features',
            'category'=>'mobile',
            'gallery'=>'https://cdn.pixabay.com/photo/2014/05/02/21/49/laptop-336373__480.jpg']]);
    }
}
