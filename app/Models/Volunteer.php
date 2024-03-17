<?php

namespace App\Models;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Volunteer extends Model
{

    protected $table = 'volunteer_events';

    use HasFactory;

    protected $fillable = [
        'post_title',
        'description',
        'location',
        'category_id',
        'responsibilities',
        'state_id',
        'organization_id',
    ];


    public function organizations():BelongsTo {
        return $this->belongsTo(Organization::class, 'organization_id');
    }
}
