<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonalInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [
            'name' => 'Shaidul islam',
            'designation' => 'Laravel Developer',
            'image'=> 'hero.png',
            'title' => 'Laravel Developer',
            'birthday' => '2022-01-01',
            'phone' => '01711111111',
            'email' => 'xG5tW@example.com',
            'address' => 'Dhaka',
            'language' => 'Bangla',
            'freelance' => 'Available',

        ];
        PersonalInfo::create($admin);
}

}