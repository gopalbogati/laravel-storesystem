<?php
namespace App\Modules\Citizens\Database\Database\Seeds;

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
                'dob' => $faker->dob,
                'age' => $faker->age,
                'father_name' => $faker->father_name,
                'mother_name' => $faker->mother_name,
                'grandfather_name' => $faker->grandfather_name,
                'permanent_address' => $faker->permanent_address,
                'image' => $faker->image,
                'description' => $faker->description
            ]);
        echo $citizen->name . "seeded" . PHP_EOL;
    }
}

