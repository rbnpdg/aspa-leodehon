<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id' => Str::uuid(),
                'name' => 'Admin', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Teacher', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Student', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ];

        DB::table('roles')->insert($roles);
    }
}
