<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' 		=> 'Daniel',
                'last_name' => 'Angel',
                'email' 	=> 'daniel@gmail.com',
                'user' 		=> 'DanielGeek',
                'password' 	=> \Hash::make('123456'),
                'type' 		=> 'admin',
                'active' 	=> 1,
                'address' 	=> 'Venegas 738-A, Puerto Varas, Chile.',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name' 		=> 'Ruth',
                'last_name' => 'Angel',
                'email' 	=> 'ruth@gmail.com',
                'user' 		=> 'ruth',
                'password' 	=> \Hash::make('123456'),
                'type' 		=> 'user',
                'active' 	=> 1,
                'address' 	=> 'Zulia, Venezuela',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
        );
        User::insert($data);
    }
}
