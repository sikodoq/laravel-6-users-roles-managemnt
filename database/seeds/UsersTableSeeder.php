<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'email_verified_at' => now(),
            'status' => 1,
        ]);
        $author = User::create([
            'name' => 'author',
            'email' => 'author@author.com',
            'password' => Hash::make('author'),
            'email_verified_at' => now(),
            'status' => 1,
        ]);
        $user = User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('user'),
            'email_verified_at' => now(),
            'status' => 1,
        ]);
        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }
}
