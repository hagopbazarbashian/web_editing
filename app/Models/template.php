<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class template extends Model
{
    protected $fillable = [
        'name',
        'title',
        'url',
        'file',
        'folder',
        'assets'
    ];
}
