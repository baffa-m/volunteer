<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'volunteer_event_id',
        'application_date',
        'status',
        // Add any other relevant columns for additional information
    ];

    // Define relationships if needed
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function volunteerEvent()
    {
        return $this->belongsTo(Volunteer::class);
    }
}
