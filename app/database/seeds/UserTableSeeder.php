<?php

class UserTableSeeder extends Seeder {

    public function run() {
        DB::table('users')->delete();
        User::create(array(
            'first_name'    => 'Tony',
            'last_name'     => 'Lefler',
            'email'         => 'tonylefler@gmail.com',
            'password'      => Hash::make('awesome')
        ));
    }

}