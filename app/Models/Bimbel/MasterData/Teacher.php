<?php

namespace App\Models\Bimbel\MasterData;

use Illuminate\Database\Eloquent\Model;

// Models
use App\Models\User;
use App\Models\Bimbel\MasterData\Classroom;

class Teacher extends Model
{
    protected $table = 'teachers';

    protected $fillable = [
        'name',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }
}
