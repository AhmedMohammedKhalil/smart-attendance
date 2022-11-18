<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Professor>
 */
class ProfessorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstNameMale().' '.$this->faker->firstNameMale(),
            'email' => $this->faker->unique()->safeEmail(),
            'gender'=> 'ذكر' ,
            'phone'=>'12345678',
            'password' => Hash::make('123456789'), // password
            'department_id'=>Department::select('*')->inRandomOrder()->first()->id
        ];
    }
}
