<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $userData = [
           [
               'name'=>'RafiRam',
               'email'=>'Rafi@gmail.com',
               'password'=>bcrypt('raf12345')
           ],
       ];

       foreach($userData as $key => $val){
           User::create($val);
       }
    }
}
