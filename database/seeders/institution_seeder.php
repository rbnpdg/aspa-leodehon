<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InstitutionSeeder extends Seeder
{
    public function run()
    {
        $institutions = [
            [
                'id' => Str::uuid(),
                'name' => 'airlangga', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'asrama', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ];

        DB::table('institutions')->insert($institutions);
    }
}
