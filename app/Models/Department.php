<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $guard = 'departments';

    protected $fillable = [
        'name','description'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function acceptedSubjects() {
        return $this->subjects()->where('approval','موافقة');
    }

    public function professors()
    {
        return $this->hasMany(Professor::class);
    }
}
