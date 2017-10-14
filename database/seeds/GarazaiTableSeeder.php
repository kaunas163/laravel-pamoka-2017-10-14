<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GarazaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('garazai')->truncate();

        $faker = Faker::create();
        $garazai = [];

        foreach (range(1, 20) as $index)
        {
            $garazai[] = [
                'pavadinimas' => $faker->sentence(3, false),
                'adresas' => $faker->address,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ];
        }

        DB::table('garazai')->insert($garazai);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
