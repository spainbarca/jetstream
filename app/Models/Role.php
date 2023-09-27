<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;
    use SoftDeletes;

    //Relación muchos a muchos
    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }
}
