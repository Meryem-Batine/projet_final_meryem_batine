<?php

namespace Database\Seeders;

use App\Models\Produt;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produt::insert([
            [
                "image"=>"ch1.jpg",
                "name"=>"chaise classic",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>100,
                "stock"=>10,
                "categorie_id"=>1,
            ],
            [
                "image"=>"ch2.jpg",
                "name"=>"chaise 2023",
                "desc"=>"sLorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>300,
                "stock"=>8,
                "categorie_id"=>1,
            ],
            [
                "image"=>"ch3.jpg",
                "name"=>"chaise modern",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>200,
                "stock"=>6,
                "categorie_id"=>1,
            ],

            [
                "image"=>"ch4.jpg",
                "name"=>"chaise bois",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>250,
                "stock"=>6,
                "categorie_id"=>1,
            ],

            [
                "image"=>"ch5.jpg",
                "name"=>"chaise black",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>500,
                "stock"=>4,
                "categorie_id"=>1,
            ],

            [
                "image"=>"ch6.jpg",
                "name"=>"chaise red",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>1000,
                "stock"=>10,
                "categorie_id"=>1,
            ],

            [
                "image"=>"ch7.webp",
                "name"=>"chaise white",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>1500,
                "stock"=>5,
                "categorie_id"=>1,
            ],
            [
                "image"=>"ch3.jpg",
                "name"=>"chaise office",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>900,
                "stock"=>20,
                "categorie_id"=>1,
            ],
            // ! table
            [
                "image"=>"t1.jpg",
                "name"=>"table modern",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>1000,
                "stock"=>10,
                "categorie_id"=>2,
            ],
            [
                "image"=>"t2.jpg",
                "name"=>"2 in 1 table",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>2000,
                "stock"=>7,
                "categorie_id"=>2,
            ],
            [
                "image"=>"t3.jpg",
                "name"=>"mini table",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>1500,
                "stock"=>4,
                "categorie_id"=>2,
            ],
            [
                "image"=>"t3.jpg",
                "name"=>"mini table",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>1500,
                "stock"=>4,
                "categorie_id"=>2,
            ],
            [
                "image"=>"t4.webg",
                "name"=>"black table",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>1300,
                "stock"=>5,
                "categorie_id"=>2,
            ],
            [
                "image"=>"t5.jpg",
                "name"=>"silver table",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>2500,
                "stock"=>3,
                "categorie_id"=>2,
            ],
            [
                "image"=>"t6.jpg",
                "name"=>"table art",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>4500,
                "stock"=>2,
                "categorie_id"=>2,
            ],
            [
                "image"=>"t7.jpg",
                "name"=>"coffee table",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>2000,
                "stock"=>4,
                "categorie_id"=>2,
            ],
            [
                "image"=>"f8.jpg",
                "name"=>"glass table",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>3300,
                "stock"=>6,
                "categorie_id"=>2,
            ],
// !sofa
            [
                "image"=>"f1.jpg",
                "name"=>"sofa gray",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>15000,
                "stock"=>2,
                "categorie_id"=>3,
            ],
            [
                "image"=>"f2.jpg",
                "name"=>"New sofa",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>20000,
                "stock"=>5,
                "categorie_id"=>3,
            ],
            [
                "image"=>"f3.png",
                "name"=>"sofa brown",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam",
                "prix"=>25000,
                "stock"=>7,
                "categorie_id"=>3,
            ],
            [
                "image"=>"f4.webp",
                "name"=>"sofa 2024",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam",
                "prix"=>45000,
                "stock"=>7,
                "categorie_id"=>3,
            ],
            [
                "image"=>"f5.webp",
                "name"=>"soft sofa",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam",
                "prix"=>45000,
                "stock"=>7,
                "categorie_id"=>3,
            ],
            [
                "image"=>"f6.jpg",
                "name"=>"sky blue sofa",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>20000,
                "stock"=>8,
                "categorie_id"=>3,
            ],
            [
                "image"=>"f7.jpg",
                "name"=>"white sofa",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>50000,
                "stock"=>1,
                "categorie_id"=>3,
            ],
            [
                "image"=>"f8.jpg",
                "name"=>"fabric sofa",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquam?",
                "prix"=>30000,
                "stock"=>3,
                "categorie_id"=>3,
            ],


        ]);
    }
}
