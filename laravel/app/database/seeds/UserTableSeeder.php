<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'email' => 'usanetbr@yahoo.com.br',
            'password' => Hash::make('milenium')
            )
        );

        User::create(array(
            'email' => 'dan.jr@outlook.com',
            'password' => Hash::make('milenium')
            )
        );

        User::create(array(
            'email' => 'luiz.debian@gmail.com',
            'password' => Hash::make('milenium')
            )
        );

        User::create(array(
            'email' => 'marciso.gonzalez@gmail.com',
            'password' => Hash::make('milenium')
            )
        );

        User::create(array(
            'email' => 'ricardo.isernhagen@gmail.com',
            'password' => Hash::make('milenium')
            )
        );

        User::create(array(
            'email' => 'rodrigodelimavieira@gmail.com',
            'password' => Hash::make('milenium')
            )
        );
    }

}

// APOS CRIAR ESSE ARQUIVO:
// php artisan db:seed