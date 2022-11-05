<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Professor;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'name' => 'التفاضل',
            'content' => ' محتوي مادة التفاضل',
            'professor_id' => Professor::where('department_id',1)->get()->random()->id,
            'department_id' => '1',
            'approval' => 'لم يتم الرد',
        ]);

        DB::table('subjects')->insert([
            'name' => 'معادلات تفاضلية',
            'content' => ' محتوي مادة المعادلات التفاضلية ',
            'professor_id' => Professor::where('department_id',1)->get()->random()->id,
            'department_id' => '1',
            'approval' => 'لم يتم الرد',
        ]);

        DB::table('subjects')->insert([
            'name' => 'التكامل',
            'content' => ' محتوي مادة  التكامل ',
            'professor_id' => Professor::where('department_id',1)->get()->random()->id,
            'department_id' => '1',
            'approval' => 'لم يتم الرد',
        ]);

        DB::table('subjects')->insert([
            'name' => 'الجبر الخطي',
            'content' => ' محتوي مادة الجبر الخطي ',
            'professor_id' => Professor::where('department_id',1)->get()->random()->id,
            'department_id' => '1',
            'approval' => 'لم يتم الرد',
        ]);

        DB::table('subjects')->insert([
            'name' => 'الهندسة',
            'content' => ' محتوي مادة  الهندسة ',
            'professor_id' => Professor::where('department_id',1)->get()->random()->id,
            'department_id' => '1',
            'approval' => 'لم يتم الرد',
        ]);

        DB::table('subjects')->insert([
            'name' => 'نظرية اعداد',
            'content' => ' محتوي مادة نظرية اعداد ',
            'professor_id' => Professor::where('department_id',1)->get()->random()->id,
            'department_id' => '1',
            'approval' => 'لم يتم الرد',
        ]);


        //Department 2  قسم اللغة الانجليزية 
        
        
        DB::table('subjects')->insert([
            'name' => 'ترجمة',
            'content' => ' محتوي مادة ترجمة  ',
            'professor_id' => Professor::where('department_id',2)->get()->random()->id,
            'department_id' => '2',
            'approval' => 'لم يتم الرد',
        ]);

        DB::table('subjects')->insert([
            'name' => 'صوتيات اللغة ',
            'content' => ' محتوي مادة صوتيات اللغة ',
            'professor_id' => Professor::where('department_id',2)->get()->random()->id,
            'department_id' => '2',
            'approval' => 'لم يتم الرد',
        ]);

        DB::table('subjects')->insert([
            'name' => 'قواعد اللغة الانجليزية',
            'content' => ' محتوي مادة قواعد اللغة الانجليزية',
            'professor_id' => Professor::where('department_id',2)->get()->random()->id,
            'department_id' => '2',
            'approval' => 'لم يتم الرد',
        ]);

        DB::table('subjects')->insert([
            'name' => ' الدراما الانجليزية',
            'content' => ' محتوي مادة الدراما الانجليزية',
            'professor_id' => Professor::where('department_id',2)->get()->random()->id,
            'department_id' => '2',
            'approval' => 'لم يتم الرد',
        ]);


        //Department 3  قسم العلوم  
        
        
        DB::table('subjects')->insert([
            'name' => 'بصريات',
            'content' => ' محتوي مادة بصريات',
            'professor_id' => Professor::where('department_id',3)->get()->random()->id,
            'department_id' => '3',
            'approval' => 'لم يتم الرد',
        ]);

        DB::table('subjects')->insert([
            'name' => ' كمياء عضوية ',
            'content' => ' محتوي مادة مياء عضوية ',
            'professor_id' => Professor::where('department_id',3)->get()->random()->id,
            'department_id' => '3',
            'approval' => 'لم يتم الرد',
        ]);

        DB::table('subjects')->insert([
            'name' => 'كمياء غير عضوية ',
            'content' => ' محتوي كمياء غير عضوية  ',
            'professor_id' => Professor::where('department_id',3)->get()->random()->id,
            'department_id' => '3',
            'approval' => 'لم يتم الرد',
        ]);

        DB::table('subjects')->insert([
            'name' => 'كمياء تحليلة',
            'content' => ' محتوي كمياء تحليلة ',
            'professor_id' => Professor::where('department_id',3)->get()->random()->id,
            'department_id' => '3',
            'approval' => 'لم يتم الرد',
        ]);

        
        //Department 4  قسم الحاسب الالى  
        
        
        DB::table('subjects')->insert([
            'name' => 'نظم تشغيل حاسب',
            'content' => ' نظم تشغيل حاسب',
            'professor_id' => Professor::where('department_id',4)->get()->random()->id,
            'department_id' => '4',
            'approval' => 'لم يتم الرد',
        ]);

        DB::table('subjects')->insert([
            'name' => '  قواعد بيانات ',
            'content' => '  محتوي قواعد بيانات ',
            'professor_id' => Professor::where('department_id',4)->get()->random()->id,
            'department_id' => '4',
            'approval' => 'لم يتم الرد',
        ]);

        DB::table('subjects')->insert([
            'name' => 'شبكات الحاسب',
            'content' => '  محتوي شبكات الحاسب ',
            'professor_id' => Professor::where('department_id',4)->get()->random()->id,
            'department_id' => '4',
            'approval' => 'لم يتم الرد',
        ]);

        DB::table('subjects')->insert([
            'name' => 'مبادئ برمجة',
            'content' => '  محتوي مبادئ برمجة  ',
            'professor_id' => Professor::where('department_id',4)->get()->random()->id,
            'department_id' => '4',
            'approval' => 'لم يتم الرد',
        ]);
    }
}
