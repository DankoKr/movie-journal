<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /** @use HasFactory<\Database\Factories\MovieFactory> */
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
    'tags' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
