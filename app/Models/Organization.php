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
        'company_name',
        'about',
        'address',
        'state',
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
