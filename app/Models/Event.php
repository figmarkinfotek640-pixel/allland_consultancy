<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'type',
        'type_label',
        'image',
        'event_date',
        'start_time',
        'end_time',
        'location',
        'mode',
        'description',
        'registration_link',
        'seats_available',
        'is_active',
    ];

    protected $casts = [
        'event_date' => 'date',
        'is_active' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            if (empty($event->slug)) {
                $event->slug = Str::slug($event->title . '-' . rand(100, 999));
            }
            if (empty($event->type_label)) {
                $labels = [
                    'seminar' => 'Free Seminar',
                    'webinar' => 'Live Webinar',
                    'spot' => 'Spot Admission',
                    'fair' => 'Education Fair',
                    'pre-departure' => 'Pre-Departure',
                ];
                $event->type_label = $labels[$event->type] ?? ucfirst($event->type);
            }
        });
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('event_date', 'asc');
    }

    public function getMonthNameAttribute()
    {
        return strtoupper($this->event_date->format('M'));
    }

    public function getDayNumberAttribute()
    {
        return $this->event_date->format('d');
    }

    public function getDayOfWeekAttribute()
    {
        return $this->event_date->format('D');
    }

    public function getFormattedTimeAttribute()
    {
        if ($this->end_time) {
            return "{$this->start_time} – {$this->end_time}";
        }
        return $this->start_time;
    }

    public function getImageUrlAttribute()
    {
        if (!empty($this->image)) {
            return asset($this->image);
        }

        $titleLower = strtolower($this->title);
        $typeLower = strtolower($this->type);

        if (str_contains($titleLower, 'germany')) {
            return asset('images/events/event-germany-seminar.jpg');
        } elseif (str_contains($titleLower, 'uk') || str_contains($titleLower, 'london') || str_contains($titleLower, 'september intake')) {
            return asset('images/events/event-uk-spot-admission.jpg');
        } elseif (str_contains($titleLower, 'canada') || str_contains($titleLower, 'pgwp')) {
            return asset('images/events/event-canada-webinar.jpg');
        } elseif (str_contains($titleLower, 'new zealand') || str_contains($titleLower, 'green list')) {
            return asset('images/events/event-nz-education-fair.jpg');
        } elseif (str_contains($titleLower, 'scholarship') || str_contains($titleLower, 'loan') || str_contains($titleLower, 'blocked')) {
            return asset('images/events/event-scholarships-webinar.jpg');
        } elseif (str_contains($titleLower, 'departure') || str_contains($titleLower, 'flying')) {
            return asset('images/events/event-pre-departure-orientation.jpg');
        } elseif ($typeLower === 'webinar') {
            return asset('images/events/event-canada-webinar.jpg');
        } elseif ($typeLower === 'spot') {
            return asset('images/events/event-uk-spot-admission.jpg');
        }

        return asset('images/events/event-germany-seminar.jpg');
    }
}

