<?php
namespace App\Modules\Citizens\Database\Seeds;

use Illuminate\Database\Seeder;
use App\Modules\Citizens\Models\Citizen;


class CitizenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('ne_NP');
        for ($i = 0; $i < 10; $i++)
            $citizen = Citizen::create([
                'name' => $faker->name,
                'dob' => $faker->dateTime,
                'age' => $faker->dateTime,
                'father_name' => $faker->firstName,
                'mother_name' => $faker->firstName,
                'grandfather_name' => $faker->lastName,
                'permanent_address' => $faker->address,
                //'image' => $faker->sate,
                'description' => $faker->text
            ]);
        echo $citizen->name . "seeded" . PHP_EOL;
    }
}

