<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogpost extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'published_at',
        'created_at',
    ];
}
