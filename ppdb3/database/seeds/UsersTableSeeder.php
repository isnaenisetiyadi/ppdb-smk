<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [];
        $faker = Faker\Factory::create();
        for($i=0;$i<2;$i++){
            $avatar_path = '/Users/isnaenisetiyadi/Documents/PPDB-SMK/ppdb3/public/images/users';
            $avatar_fullpath = $faker->image($avatar_path, 200,250, 'people', true, true, 'people');
            $avatar = str_replace($avatar_path . '/' ,'',$avatar_fullpath);
            $users[$i] = [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password'=> bcrypt('1234'),
                'rules' => json_encode(['ADMIN']),
                'avatar' => $avatar,
                'status' => 1,
                'created_at' => Carbon\Carbon::now(),
            ];
        }
        DB::table('users')->insert($users);
    }
}
