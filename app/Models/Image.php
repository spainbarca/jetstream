<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    protected $guarded = [];

    use HasFactory;
    use SoftDeletes;

    // Relación uno a uno polimórfica
    public function imageable(){
        return $this->morphTo();
    }
}
