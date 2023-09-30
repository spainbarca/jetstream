<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    //Relación uno a muchos (inversa)
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relación  polimorfica
    public function commentable(){
        return $this->morphTo();
    }
}
