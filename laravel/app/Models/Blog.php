<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
    ];

    public function userCreated()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function userUpdated()
    {
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }

    // public function allUserRelations()
    // {
    //     return $this->user->merge($this->userUpdated);
    // }
}
