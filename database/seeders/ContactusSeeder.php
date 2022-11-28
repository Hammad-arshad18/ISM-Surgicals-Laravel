<?php

namespace Database\Seeders;

use App\Models\ContactModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as faker;

class ContactusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();

        for ($i = 0; $i <= 10; $i++) {
            $contactUs = new ContactModel;
            $contactUs->name = $faker->name;
            $contactUs->email = $faker->email;
            $contactUs->comment = "Dummy Contact Us Entry";
            $contactUs->save();
        }
    }
}
