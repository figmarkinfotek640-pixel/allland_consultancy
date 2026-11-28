<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstagramReel extends Model
{
    use HasFactory;

    protected $table = 'instagram_reels';

    protected $fillable = [
        'title',
        'reel_url',
        'description',
        'thumbnail',
        'video_url',
        'location_tag',
        'likes_count',
        'comments_count',
        'display_order',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'display_order' => 'integer',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('display_order', 'asc')->latest();
    }

    public function getThumbnailUrlAttribute(): string
    {
        if (empty($this->thumbnail)) {
            return asset('images/student-1.jpg');
        }

        if (str_starts_with($this->thumbnail, 'http://') || str_starts_with($this->thumbnail, 'https://')) {
            return $this->thumbnail;
        }

        return asset($this->thumbnail);
    }

    public function getVideoUrlAttribute(): ?string
    {
        if (empty($this->attributes['video_url'])) {
            return asset('videos/banner-video.mp4');
        }

        if (str_starts_with($this->attributes['video_url'], 'http://') || str_starts_with($this->attributes['video_url'], 'https://')) {
            return $this->attributes['video_url'];
        }

        return asset($this->attributes['video_url']);
    }
}
