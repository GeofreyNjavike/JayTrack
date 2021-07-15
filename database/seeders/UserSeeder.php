<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        DB::table('users')->insert(array (
            0 =>
            array (
                'name'=>'Jackson Makala',
                'email'=>'ceo@gmail.com',
                'password'=>'ceo1234',
            ),
            1 =>
            array (
                'name'=>'Geofrey Njavike',
                'email'=>'geofreynjavike@gmail.com',
                'password'=>'njavike1234',
            ),
            2 =>
            array (
                'name'=>'Iddy Eid',
                'email'=>'iddy@gmail.com',
                'password'=>'idd1234',
            ),
            3 =>
            array (
                'name'=>'Hoza Hoza',
                'email'=>'hoza@gmail.com',
                'password'=>'hoza1234',
            ),
            4 =>
            array (
                'name'=>'PrayGod Hk',
                'email'=>'pray@gmail.com',
                'password'=>'pray1234',
            ),
            5 =>
            array (
                'name'=>'Isack Isack',
                'email'=>'issack@gmail.com',
                'password'=>'isack1234',
        )
    )
            );
        }
}
