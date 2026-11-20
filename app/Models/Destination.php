<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'country_code',
        'flag',
        'tab_badge',
        'hero_badge',
        'eyebrow',
        'title',
        'blurb',
        'description',
        'image',
        'banner_image',
        'stats',
        'features',
        'popular_courses',
        'requirements',
        'living_cost',
        'post_study_work',
        'order',
        'is_active',
    ];

    protected $casts = [
        'stats' => 'array',
        'features' => 'array',
        'popular_courses' => 'array',
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($dest) {
            if (empty($dest->slug)) {
                $dest->slug = Str::slug($dest->name);
            }
        });
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('order', 'asc')->orderBy('id', 'asc');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'country_code', 'country_code')->where('is_active', true);
    }

    public function getImageUrlAttribute()
    {
        if (!empty($this->image)) {
            return asset($this->image);
        }
        return asset('images/dest-germany.jpg');
    }

    public function getBannerImageUrlAttribute()
    {
        if (!empty($this->banner_image)) {
            return asset($this->banner_image);
        }
        return $this->image_url;
    }

    public function getFlagUrlAttribute()
    {
        $code = strtolower($this->country_code);
        if ($code === 'uk') {
            $code = 'gb';
        }
        if (strlen($code) === 2) {
            return "https://flagcdn.com/w40/{$code}.png";
        }
        return null;
    }
}
