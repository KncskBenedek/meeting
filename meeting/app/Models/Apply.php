<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;
    public $timeStamps = false;
    protected $fillable = [
        'meeting',
        'user',
        'name'
    ];
}
