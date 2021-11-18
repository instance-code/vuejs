<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogtitle extends Model
{
    use HasFactory;
    public $timestamps=true;
    protected $fillable=[
        'blog_title',
        'blog_content',
        'created_by',
        'updated_by',
    ];
    protected $primaryKey='id';
}
