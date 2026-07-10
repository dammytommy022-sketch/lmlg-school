<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryImage extends Model
{
    public const CATEGORIES = [
        'school-activities' => 'School Activities',
        'classroom-learning' => 'Classroom Learning',
        'sports' => 'Sports',
        'cultural-events' => 'Cultural Events',
        'graduation' => 'Graduation',
        'excursions' => 'Excursions',
    ];

    protected $fillable = [
        'title',
        'category',
        'image',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'sort_order' => 'integer',
        ];
    }

    protected function imageUrl(): Attribute
    {
        return Attribute::get(function () {
            // Legacy/static assets (seeded images) live under public/assets/...
            // Admin-uploaded images live on the public storage disk.
            return str_starts_with($this->image, 'assets/')
                ? asset($this->image)
                : Storage::disk('public')->url($this->image);
        });
    }

    protected function categoryLabel(): Attribute
    {
        return Attribute::get(fn () => self::CATEGORIES[$this->category]
            ?? Str::of($this->category)->replace('-', ' ')->title()->toString());
    }
}
