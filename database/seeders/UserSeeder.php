<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'test',
            'email' => 'test@mail.com',
            'phone' => '2464686423',
            'address' => 'jln Sudirman',
            'state' => 'Kedah',
            'password' => Hash::make('test'),
        ]);
    }
}
