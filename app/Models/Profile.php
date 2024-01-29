<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'email',
        'profile_photo_path',
        'phone_no',
        'date_of_birth',
        'gender',
        'academic_qualification',
        'years_of_experience',
        'cv_path',
        'user_id'
    ];


    public function user()
    {
        return $this->hasOne(User::class);
    }
}
