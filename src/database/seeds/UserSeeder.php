<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(\App\Models\User::class, 1)->create();
        DB::table('users')->delete();

        User::create(array(
            'name' => "Admin",
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'isAdmin' => 1,
        ));

    }
}
