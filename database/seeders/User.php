<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1; $i <= 10000; $i++) {

            DB::table('users')->insert([
                'cedula' => Str::random(10),
                'f_name' => Str::random(10),
                's_name' => Str::random(10),
                'f_surname' => Str::random(10),
                's_surname' => Str::random(10),
                'gender'=>'masculino',
                'mobile' => Str::random(10),
                'phone' => Str::random(10),
                'photography' => '1',
                'date_of_birth' => '1999-04-08',
                'ethnicity' => 'Mestizo/a',
                'civil_status' => 'Soltero/a',
                'type_auth' => 'manual',
                'password' => password_hash('12345', PASSWORD_DEFAULT),
                'email' => Str::random(10),
                'email_inst' => Str::random(10),
                'email_verified_at' => '2021-03-29 07:03:20',
                'created_at' => '2021-03-29 07:03:20',
                'updated_at' => '2021-03-29 07:03:20'
            ]);
        }
    }
}
