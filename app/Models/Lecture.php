<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;
    protected $guard = 'lectures';

    protected $fillable = [
        'title',
        'qr_code',
        'qr_url',
        'status',
        'subject_id',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function attendance()
    {
        return $this->belongsToMany(Student::class,'attendance')->withPivot('entrance_time')->as('attendance')->withTimestamps();
    }
}
