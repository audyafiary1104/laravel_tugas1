<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class merek extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,10) as $index){
            DB::table('barang')->insert([ 
                'nama_barang' => $faker->name,
                'stok' => $faker->randomFloat(5),
                'harga' => $faker->randomDigit(6),
                'deskripsi' => $faker->word,
                'id_merek' => '19',
            ]);
        }
    }
}
