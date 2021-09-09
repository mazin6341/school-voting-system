<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    public $fillable = [
        'cand_name', 
        'cand_class', 
        'position_id'
    ];
}
