<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;


class Skill extends Model
{
    use HasFactory;

    protected $connection = 'skills';

    // protected $connection = 'mongodb';

    protected $guarded = [];
}
