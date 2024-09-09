<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class UserSkill extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $table = 'user_skills';

    protected $guarded = [];

    protected $casts = [
        'skill_id' => 'integer',
        'user_id' => 'integer',
        'skills' => 'array',
    ];

}
