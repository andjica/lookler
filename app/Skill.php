<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //

    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('rating');
    }

    public static function search()
    {
        $q = explode(" ", request()->search);

        $query = Skill::where('skill', 'like', '');

        foreach ($q as $word)
        {
            $query->orWhere('skill', 'like', '%'.$word.'%');
        }

        return $query->get();
    }
}
