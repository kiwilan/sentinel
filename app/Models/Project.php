<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kiwilan\Steward\Traits\HasSlug;
use Kiwilan\Steward\Traits\LiveQueryable;

class Project extends Model
{
    use HasFactory;
    use LiveQueryable;
    use HasSlug;

    protected $fillable = [
        'name',
        'url',
        'public_key',
        'private_key',
    ];
}
