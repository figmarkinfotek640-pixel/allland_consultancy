<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'destination',
        'qualification',
        'service_interest',
        'preferred_intake',
        'message',
        'status',
        'admin_notes',
    ];

    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}

