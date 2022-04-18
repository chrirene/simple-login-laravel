<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class RolesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Director',
            'description' => 'Manage  and lead the company in accordance with the company interest'
        ]);

        DB::table('roles')->insert([
            'name' => 'Manager',
            'description' => 'Guiding the development, maintenance, and allocation of resource'
        ]);

        DB::table('roles')->insert([
            'name' => 'Supervisor',
            'description' => 'Responsible to overseeing the subordinates at work at the factory level'
        ]);

        DB::table('roles')->insert([
            'name' => 'Staff',
            'description' => 'Responsible to manage, implement and carry out work that helps the organisation achieve its mission/overall purpose'
        ]);
    }
}