<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    public $primaryKey = "meeting_id";
    public $timeStamps = false;
    protected $fillable = [
        'date',
        'location',
        'max_number'
    ];
}
