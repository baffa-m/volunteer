<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'org_name',
        'about',
        'address',
        'state_id',
    ];


    public function user():HasOne
    {
        return $this->hasOne(User::class);
    }

    public function state():HasOne
    {
        return $this->hasOne(State::class);
    }

}
