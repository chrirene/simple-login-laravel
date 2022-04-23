<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ahmad Muklis',
            'employee_id' => '2402023004',
            'birth_date' => '1991-11-03',
            'gender' => 'Married',
            'status' => 'Single',
            'address' => 'Jl.Pengumben no.36a, Jakarta Utara',
            'email' => 'ahmad@avalogix.id',
            'role_id' => '4',
            'phone_no' => '081726198532',
            'password' =>  Hash::make('ahmad123'),
            'remember_token' =>  str_random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Bryan Sidoarjo',
            'employee_id' => '2402023001',
            'birth_date' => '1995-11-03',
            'gender' => 'Married',
            'status' => 'Single',
            'address' => 'Jl.Pesanggrahan no.36a, Jakarta Barat',
            'email' => 'bryan.sidoarjo@avalogix.id',
            'role_id' => '3',
            'phone_no' => '081726198532',
            'password' =>  Hash::make('bryan123'),
            'remember_token' =>  str_random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Christine Irene Lumban Tobing',
            'employee_id' => '2402023002',
            'birth_date' => '1999-10-26',
            'gender' => 'Female',
            'status' => 'Single',
            'address' => 'Jl. Pilar Baru No.3G Kedoya, Jakarta Barat',
            'email' => 'christine.irene@avalogix.id',
            'role_id' => '2',
            'phone_no' => '082287014300',
            'password' =>  Hash::make('bhellopretty12'),
            'remember_token' =>  str_random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Gilang Sinawang',
            'employee_id' => '2402023003',
            'birth_date' => '1998-09-15',
            'gender' => 'Male',
            'status' => 'Single',
            'address' => 'Simplity Icon BSD No.9',
            'email' => 'gilang.sinawang@avalogix.id',
            'role_id' => '1',
            'phone_no' => '085921277917',
            'password' =>  Hash::make('gilang123'),
            'remember_token' =>  str_random(10),
        ]);
    }
}