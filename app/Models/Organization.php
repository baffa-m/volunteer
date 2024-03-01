<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'org_name',
        'about',
        'address',
        'state_id',
        'avatar_path',
        'user_id',
    ];


    public function user():HasOne
    {
        return $this->hasOne(User::class);
    }

    public function state():HasOne
    {
        return $this->hasOne(State::class);
    }

    public function volunteer(): HasMany {
        return $this->hasMany(Volunteer::class);
    }

}
