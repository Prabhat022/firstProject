<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1; $i<=100; $i++) {
            $student = new Student;
            $student->name = $faker->name;
            $student->email = $faker->email;
            $student->password =$faker->password;
            $student->country = $faker->country;
            $student->save();
        }


        // $student = new Student;
        // $student->name = "Narayan";
        // $student->email = 'narayan@gmail.com';
        // $student->password ='narayan';
        // $student->country = 'India';
        // $student->save();
    }
}
