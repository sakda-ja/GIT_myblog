<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('employees')->insert
        ([
                [
                    'fullname' => 'hack jatuporn',
                    'gender' => 'Male' ,
                    'email' => 'sakda.ja@kpsc.ac.th',
                    'tel' => '0878464418',
                    'age' => 35,
                    'address' => '17/1',
                    'avartar' => 'noavatar.jpg',
                    'status' => 1

                ],
                [
                    'fullname' => 'ศักดิ์ดา จตุพร',
                    'gender' => 'Male' ,
                    'email' => 'sakda.j@kpsc.ac.th',
                    'tel' => '12345678',
                    'age' => 39,
                    'address' => '17/1',
                    'avartar' => 'noavatar.jpg',
                    'status' => 1

                ],
                [
                    'fullname' => 'นฤมล ศรีสุข',
                    'gender' => 'Male' ,
                    'email' => 'sakdaja@kpsc.ac.th',
                    'tel' => '12323423',
                    'age' => 40,
                    'address' => '17/1',
                    'avartar' => 'noavatar.jpg',
                    'status' => 1

                ]
            ]);
    }
}
