<?php

namespace App\Models\Bimbel\MasterData;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    protected $fillable = [
        'name'
    ];
}
