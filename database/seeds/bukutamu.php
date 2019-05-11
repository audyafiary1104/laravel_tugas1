<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class bukutamu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,10) as $index){ //foreach sama aja looping dia loop sebanyak 10data
            DB::table('bukutamu')->insert([ //sama kaya insert into di php untuk memasukan kedalam databse
                'nama' => $faker->name,
                'email' => $faker->email,
                'alamat' => $faker->address,
                'jenis_kelamin' => 'N/A',

            ]);
        }
    }
}
