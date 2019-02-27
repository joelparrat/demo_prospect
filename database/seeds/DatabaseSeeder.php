<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        $faker = Faker\Factory::create();
        
        $max_user = 50;
        $max_prospect = 200;
        $max_commentaire = 50;
        
        for ($i = 0; $i < $max_user; $i++)
        {
            DB::table('users')->insert([ //,
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'email' => $faker->unique()->email,
                'add_number' => $faker->numberBetween($min=1, $max=200),
                'add_street' => $faker->streetName,
                'add_zipcode' => $faker->postcode,
                'add_city' => $faker->city,
                'telephone' => $faker->phoneNumber,
                'password' => bcrypt('12345678')
            ]);
        }

        for ($i = 0; $i < $max_prospect; $i++)
        {
            DB::table('prospects')->insert([ //,
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'birthday' => $faker->dateTimeBetween($starDate='-100 years', $endDate='now'),
                'job' => $faker->jobTitle,
                'company' => $faker->company,
                'add_number' => $faker->numberBetween($min=1, $max=200),
                'add_street' => $faker->streetName,
                'add_zipcode' => $faker->postcode,
                'add_city' => $faker->city,
                'add_country' => $faker->country,
                'telephone' => $faker->phoneNumber,
                'email' => $faker->unique()->email,
                'fid' => $faker->numberBetween($min=1, $max=50)
            ]);
        }
        
        for ($i = 0; $i < $max_commentaire; $i++)
        {
            DB::table('comments')->insert([ //,
                'title' => $faker->firstName,
                'text' => $faker->lastName,
                'fid' => $faker->numberBetween($min=1, $max=200)
            ]);
        }
    }
}
