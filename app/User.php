<?php

namespace App;

use App\Notifications\VerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function full_name()
    {
        return $this->first_name." ".$this->last_name;
    }

    public function following()
    {
        return $this->belongsToMany(User::class, 'followers', 'user_id', 'is_following');
    }

    public function followedBy()
    {
        return $this->belongsToMany(User::class, 'followers', 'is_following', 'user_id');
    }

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }

    public function schools()
    {
        return $this->hasMany(Education::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class)->withPivot('rating');
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function numberOfFollowers()
    {
        return $this->followedBy->count();
    }

    public function followingNumber()
    {
        return $this->following->count();
    }
    
    public static function searchByFirstAndLast()
    {
        $q = explode(" ", request()->search);

        $query = User::where('first_name', 'like', '');

        foreach ($q as $word)
        {
            $query->orWhere('first_name', 'like', '%'.$word.'%');
            $query->orWhere('last_name', 'like', '%'.$word.'%');

        }

        return $query->get();
    }

    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }
}
