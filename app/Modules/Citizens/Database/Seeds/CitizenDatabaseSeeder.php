<?php

namespace App\Modules\Citizens\Database\Seeds;
use App\Modules\Citizens\Database\Database\Seeds\CitizenSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CitizenDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CitizenSeeder::class);

        Model::reguard();
    }
}
