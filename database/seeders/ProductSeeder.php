<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $products = [
            [
                "name" => "Flower Bouquet",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui dicta cupiditate quos hic distinctio ab quaerat magnam itaque, delectus dolorem eius doloremque nisi soluta harum deleniti fugit, praesentium libero laudantium.",
                "image" => "flowerbouquet-product.jpg",
                "price" => 15000 ,
            ],
            [
                "name" => "Money Bucket",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui dicta cupiditate quos hic distinctio ab quaerat magnam itaque, delectus dolorem eius doloremque nisi soluta harum deleniti fugit, praesentium libero laudantium.",
                "image" => "moneybucket.jpg",
                "price" => 10000,
            ],
            [
                "name" => "Doll Bucket",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui dicta cupiditate quos hic distinctio ab quaerat magnam itaque, delectus dolorem eius doloremque nisi soluta harum deleniti fugit, praesentium libero laudantium.",
                "image" => "dollbucket.jpg",
                "price" => 20000 ,
            ],




            [
                "name" => "Doll Hampers",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui dicta cupiditate quos hic distinctio ab quaerat magnam itaque, delectus dolorem eius doloremque nisi soluta harum deleniti fugit, praesentium libero laudantium.",
                "image" => "dollhampers.jpg",
                "price" => 25000 ,
            ],
            [
                "name" => "Mat Prayer",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui dicta cupiditate quos hic distinctio ab quaerat magnam itaque, delectus dolorem eius doloremque nisi soluta harum deleniti fugit, praesentium libero laudantium.",
                "image" => "mat-prayer.jpg",
                "price" => 30000 ,
            ],
            [
                "name" => "Cookies",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui dicta cupiditate quos hic distinctio ab quaerat magnam itaque, delectus dolorem eius doloremque nisi soluta harum deleniti fugit, praesentium libero laudantium.",
                "image" => "cookies.jpg",
                "price" => 20000 ,
            ],
            [
                "name" => "Skincare",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui dicta cupiditate quos hic distinctio ab quaerat magnam itaque, delectus dolorem eius doloremque nisi soluta harum deleniti fugit, praesentium libero laudantium.",
                "image" => "skincare.jpg",
                "price" => 50000 ,
            ],
            [
                "name" => "Mug",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui dicta cupiditate quos hic distinctio ab quaerat magnam itaque, delectus dolorem eius doloremque nisi soluta harum deleniti fugit, praesentium libero laudantium.",
                "image" => "mug.jpg",
                "price" => 35000 ,
            ],
            ];

            foreach ($products as $product) {
                Product::create($product);
            }
    }
}
