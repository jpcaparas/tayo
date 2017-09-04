<?php

use Illuminate\Database\Seeder;
use App\Models\User\Profile;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create()
            ->each(function (User $u) {
                $u->profile()->save(factory(Profile::class)->make());
            });
    }
}
