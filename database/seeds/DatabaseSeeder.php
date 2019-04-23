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
        factory(App\User::class,50)->create()->each(function ($user){
            $user->profile()->save(
                factory(App\Profile::class)->make(['user_id'=>$user->id])
            );
        });
    }
}
