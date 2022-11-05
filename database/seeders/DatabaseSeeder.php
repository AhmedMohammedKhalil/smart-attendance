<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        \App\Models\Admin::factory(3)->create();
        $this->call(DepartmentSeeder::class);
        \App\Models\Professor::factory(20)->create();
        $this->call(SubjectSeeder::class);
    }
}
