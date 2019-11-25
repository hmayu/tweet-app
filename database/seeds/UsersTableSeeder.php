<?php

use Carbon\Carbon;
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
        $users = [
            ['name' => '松本', 'email' => "matumoto@email.co.jp"],
            ['name' => '大野', 'email' => "oono@email.co.jp"],
            ['name' => '櫻井', 'email' => "sakurai@email.co.jp"],
            ['name' => '相葉', 'email' => "aiba@email.co.jp"],
            ['name' => '二宮', 'email' => "ninomiya@email.co.jp"],
        ];
            
        foreach($users as $user){
            DB::table('users')->insert([
            ['name' => $user['name'],
            'email' => $user['email'],
            'password' => bcrypt('test12345'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),],]);
        }
    }
}
