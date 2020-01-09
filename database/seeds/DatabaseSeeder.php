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
        // $this->call(UsersTableSeeder::class);

        // clear the current tables
        DB::table('users')->delete();
        DB::table('posts')->delete();

        // Seed posts
        factory(App\Post::class, 8)->create();

        // create a user we can login with 
        App\User::create([
            'name' => 'Erick Wachira',
            'email' => 'ewachira254@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
