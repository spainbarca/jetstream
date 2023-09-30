<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use HasFactory;
    use SoftDeletes;

    //Relación uno a muchos (inversa)
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relación uno a muchos polimorfica
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    //Relación muchos a muchos polimorfica
    public function posts(){
        return $this->morphToMany(Tag::class,'taggable');
    }
}
