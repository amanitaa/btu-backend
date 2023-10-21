<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{

    use HasFactory;
    protected $appends = array(
        'users' => ''
    );

    protected $fillable = [
        'users',
        'title',
        'description',
    ];

    protected $table = 'quiz';
}
