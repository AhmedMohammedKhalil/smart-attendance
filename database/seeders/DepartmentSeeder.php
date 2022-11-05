<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'قسم الرياضيات',
            'description' =>'يهتم بعلوم الرياضيات البحته والتطبيقية والخوارزميات '
        ]);
        DB::table('departments')->insert([
            'name' => 'قسم اللغات ',
            'description' =>' يهتم  بااللغات '
        ]);

        DB::table('departments')->insert([
            'name' => 'قسم العلوم ',
            'description' =>' يهتم بالعلوم التطبيقيه وعلوم الطبيعة'
        ]);
        
        DB::table('departments')->insert([
            'name' => 'قسم الحاسبات ',
            'description' =>'يهتم بعلوم الحاسب والبرمجة '
        ]);
    }
}
