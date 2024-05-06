<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Administrator',
                'email' => 'futakeci@gmail.com',
                'password' => '12345',
                'is_admin' => true
            ],
            [
                'name' => 'kvnrynfl',
                'email' => 'kevinreynaufal2004@gmail.com',
                'password' => '12345',
                'is_admin' => false
            ]
        ];

        foreach ($data as $d) {
            DB::table('users')->insert([
                'name' => $d['name'],
                'email' => $d['email'],
                'password' => Hash::make($d['password']),
                'is_admin' => $d['is_admin'],
            ]);
        }
    }
}
