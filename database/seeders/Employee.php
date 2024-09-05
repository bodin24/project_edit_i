<?php

namespace Database\Seeders;

use Database\Factories\EmployeeFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Employee extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmployeeFactory::new()->count(5)->create();
    }
}
