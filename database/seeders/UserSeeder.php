<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/users.json');
        $users=collect(json_decode($json));
      
        $users->each(function($user){ 
            user::create([
                    'name'=>$user->name,
                    'age'=>$user->age,
                    'email'=>$user->email,
                    'address'=>$user->address,
                ]);
    });
}
}
