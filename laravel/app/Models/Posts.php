<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $table = 'posts';
    
    protected $fillable = [
        'blog_title',
        'blog_content',
        'created_by',
        'updated_by',
        'updated_date',
    ];
}
