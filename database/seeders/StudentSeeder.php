<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => "Andrei Miguel Abaya",
            'age' => "25",
            'address' => "Brgy. San Agustin, City of San Fernando, La Union",
            'occupation' => "System Developers Assistant",
            'email' => "andreimiguel.abaya@lorma.edu"
        ]);

        Student::create([
            'name' => "John Doe",
            'age' => "24",
            'address' => "Lingsat, City of San Fernando, La Union",
            'occupation' => "System Developer",
            'email' => "john.doe@lorma.edu"
        ]);

        Student::create([
            'name' => "Jane Smith",
            'age' => "25",
            'address' => "Camansi, City of San Fernando, La Union",
            'occupation' => "System Developer",
            'email' => "jane.smith@lorma.edu"
        ]);
    }
}
