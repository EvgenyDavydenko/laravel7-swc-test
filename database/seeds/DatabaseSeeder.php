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
        // $this->call(UserSeeder::class);
        factory(\App\Models\User::class, 5)->create()->each(
            function($user) {
                factory(\App\Models\Event::class, 3)->create(['creator_id' => $user->id]);
            }
        );
    }
}
