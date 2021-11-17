<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Jane UserAdmin',
            'email'=>'jane@example.com',
            'password'=>Hash::make('inet2005'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('users')->insert([
            'name'=>'Bob Moderator',
            'email'=>'bob@example.com',
            'password'=>Hash::make('inet2005'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('users')->insert([
            'name'=>'Susan ThemeAdmin',
            'email'=>'susan@example.com',
            'password'=>Hash::make('inet2005'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
