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
                "image"=>"img sofa",
                "name"=>"sofa",
                "desc"=>"regzerfzerfzsefs",
                "prix"=>100,
                "stock"=>10,
                "categorie_id"=>1,
            ],

        ]);
    }
}
