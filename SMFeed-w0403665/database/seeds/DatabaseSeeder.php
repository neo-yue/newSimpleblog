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
        $this->call(themesTable::class);
        // $this->call(usersTable::class);
        // $this->call(rolesTable::class);
        // $this->call(role_userTable::class);
    }
}
