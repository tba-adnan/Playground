<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checknameModel extends Model
{
    use HasFactory;
    protected $table = 'names';
    protected $fillable = ['name', 'nickname'];
}
