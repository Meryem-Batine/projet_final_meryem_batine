<?php

namespace Database\Seeders;

use App\Models\Infos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Infos::create([
            "ville" => "Buttonwood, California.",
            "adrs" => "Rosemead, CA 91770",
            "phone" => '00 (440) 9865 562',
            "emploi" => "Mon to Fri 9am to 6pm",
            "email" => "support@colorlib.com",
            "title" => "Send us your query anytime!",
        ]);
    }
}
