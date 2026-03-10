<?php

namespace App\Models\Bimbel\MasterData;

use Illuminate\Database\Eloquent\Model;

// Models
use App\Models\Bimbel\MasterData\Classroom;

class Subject extends Model
{
    protected $table = 'subjects';

    protected $fillable = [
        'name'
    ];

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }
}
