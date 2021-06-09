<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insertOrIgnore([
            [
                'name' => 'Propsempire',
                'email' => 'admin@propsempire.com',
                'password' => Hash::make('props2021'),
                'user_code' => 'PE/'.rand(11000,99990),
                'role' => 'admin',
            ],

            [
                'name' => 'Collins Onumba',
                'email' => 'collins@propsempire.com',
                'password' => Hash::make('collins2021'),
                'user_code' => 'PE/'.rand(11000,99990),
                'role' => 'agent',
            ],

            [
                'name' => 'Propsempire Agency',
                'email' => 'agency@propsempire.com',
                'password' => Hash::make('agency2021'),
                'user_code' => 'PE/'.rand(11000,99990),
                'role' => 'agency',
            ],

            [
                'name' => 'Propsempire Vendor',
                'email' => 'vendor@propsempire.com',
                'password' => Hash::make('vendor2021'),
                'user_code' => 'PE/'.rand(11000,99990),
                'role' => 'vendor',
            ],
        ]);
    }
}
