<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $guard = 'subjects';

    protected $fillable = [
        'name',
        'content',
        'approval',
        'department_id',
        'professor_id',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function lectures()
    {
        return $this->hasMany(Lecture::class);
    }
    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::class,'enrollment')->withTimestamps();
    }
}
