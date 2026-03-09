<?php

namespace App\Models\Yayasan\MasterData;

use Illuminate\Database\Eloquent\Model;

class Vision extends Model
{
    protected $table = 'visions';

    protected $fillable = [
        'content',
        'is_active',
    ];
}
