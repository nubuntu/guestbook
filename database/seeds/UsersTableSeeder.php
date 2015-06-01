<?php
 
use Illuminate\Database\Seeder;
 
class UsersTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->truncate();
 
        $users = array(
            ['email' => 'admin@gmail.com', 'name' => 'Noercholis', 'password' => Hash::make('admin'), 'created_at' => new DateTime],
        );
        DB::table('users')->insert($users);
    }
 
}