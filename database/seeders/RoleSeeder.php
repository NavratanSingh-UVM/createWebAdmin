<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $role=Role::create([
        //     'name'=>'super-admin',
        // ]);

        $user = User::create([
            'name'=>"Admin",
            'email'=>"navratansingh.uvm@gmail.com",
            'password'=>Hash::make('Nav@1234#'),
            'show_password'=>"Nav@1234#"
        ]);

        $user->assignRole("admin");
    }
}
