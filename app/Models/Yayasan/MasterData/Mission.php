<?php

namespace App\Models\Yayasan\MasterData;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    protected $table = 'missions';

    protected $fillable = [
        'content',
        'item_order',
    ];
}
