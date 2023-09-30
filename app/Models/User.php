<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    //Relación uno a uno
    public function profile(){
        // $profile = Profile::where('user_id',$this->id)->first();
        // return $profile;
        //return $this->hasOne(Profile::class,'foreign_key','local_key');

        return $this->hasOne(Profile::class);
    }

    //Relación uno a muchos
    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function videos(){
        return $this->hasMany(Video::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    //Relación muchos a muchos
    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    //Relación uno a uno polimórfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
