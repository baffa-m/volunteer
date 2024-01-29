<?php

namespace App\Models;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Volunteer extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_title',
        'description',
        'location',
        'post_openings',
        'category'
    ];


    public function organizations():BelongsTo {
        return $this->belongsTo(Organization::class, 'organization_id');
    }
}
