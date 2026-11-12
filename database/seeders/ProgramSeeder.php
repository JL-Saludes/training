<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*$programs = [
            [
                'id' => 1,
                'code' => 'BSIT',
                'name' => 'Bachelor of Science in Information Technology',
                'college' => 'College of Computer and Multimedia Studies',
                'slot' => 120,
            ],
            [
                'id' => 2,
                'code' => 'BSCS',
                'name' => 'Bachelor of Science in Computer Science',
                'college' => 'College of Computer and Multimedia Studies',
                'slot' => 80,
            ],
            [
                'id' => 3,
                'code' => 'BSN',
                'name' => 'Bachelor of Science in Nursing',
                'college' => 'College of Nursing',
                'slot' => 100,
            ]
        ];

        foreach ($programs as $program) {
            Program::updateOrCreate(
                ['code' => $program['code']],
                $program + ['is_active' => true]
            );
        }*/

        Program::factory()->count(30)->create();
    }
}
