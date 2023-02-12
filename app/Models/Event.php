<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'room_id',
        'username',
        'text',
    ];
}
