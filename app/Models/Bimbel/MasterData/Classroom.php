<?php

namespace App\Models\Bimbel\MasterData;

use Illuminate\Database\Eloquent\Model;

// Models
use App\Models\Bimbel\MasterData\Subject;
use App\Models\Bimbel\MasterData\Teacher;

class Classroom extends Model
{
    protected $table = 'classrooms';

    protected $fillable = [
        'name',
        'subject_id',
        'teacher_id',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
