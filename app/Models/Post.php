<?php

namespace App\Models;

use Conner\Likeable\Likeable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, Likeable;
    protected $guarded = [];


    public function comments()
    {
        return $this->hasMany(Comment::class);

    }



    public function user()
    {
        return $this->belongTo(User::class);
    }




}
