<?php

namespace Database\Factories;


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
            'name' => $this->faker->firstNameFemale().' '.$this->faker->firstNameMale(),
            'email' => $this->faker->unique()->safeEmail(),
            'gender'=> 'انثي' ,
            'phone'=>'12345678',     
            'password' => Hash::make('123456789'), // password
            'department_id'=>$this->faker->numberBetween(1,4),
        ];
    }
}
