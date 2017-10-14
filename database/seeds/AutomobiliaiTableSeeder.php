<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AutomobiliaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('automobiliai')->truncate();

        $faker = Faker::create();
        $automobiliai = [];

        foreach (range(1, 200) as $index)
        {
            $automobiliai[] = [
                'marke' => $faker->word,
                'modelis' => $faker->word,
                'metai' => $faker->numberBetween(1990, 2017),
                'rida' => $faker->numberBetween(0, 999999),
                'garazas_id' => $faker->numberBetween(1, 20),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ];
        }

        DB::table('automobiliai')->insert($automobiliai);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
