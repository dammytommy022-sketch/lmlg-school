<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'button1_label',
        'button1_link',
        'button2_label',
        'button2_link',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'sort_order' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    protected function imageUrl(): Attribute
    {
        return Attribute::get(function () {
            // Legacy/static assets (seeded slides) live under public/assets/...
            // Admin-uploaded images live on the public storage disk.
            return str_starts_with($this->image, 'assets/')
                ? asset($this->image)
                : Storage::disk('public')->url($this->image);
        });
    }
}
