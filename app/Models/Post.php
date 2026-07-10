<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
        'image',
        'category',
        'author',
        'published_at',
        'is_published',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'date',
            'is_published' => 'boolean',
        ];
    }

    protected static function booted(): void
    {
        static::saving(function (Post $post) {
            if (! $post->slug) {
                $post->slug = static::uniqueSlugFor($post->title, $post->id);
            }
        });
    }

    public static function uniqueSlugFor(string $title, ?int $ignoreId = null): string
    {
        $base = Str::slug($title);
        $slug = $base;
        $suffix = 2;

        while (
            static::where('slug', $slug)
                ->when($ignoreId, fn (Builder $query) => $query->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = "{$base}-{$suffix}";
            $suffix++;
        }

        return $slug;
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true)
            ->where(function (Builder $query) {
                $query->whereNull('published_at')
                    ->orWhere('published_at', '<=', now());
            });
    }

    protected function imageUrl(): Attribute
    {
        return Attribute::get(function () {
            if (! $this->image) {
                return asset('assets/images/blog/latest-blog/pic1.jpg');
            }

            // Legacy/static assets (seeded posts) live under public/assets/...
            // Admin-uploaded images live on the public storage disk.
            return str_starts_with($this->image, 'assets/')
                ? asset($this->image)
                : Storage::disk('public')->url($this->image);
        });
    }

    protected function bodyParagraphs(): Attribute
    {
        return Attribute::get(fn () => array_values(array_filter(
            array_map('trim', preg_split('/\r?\n\r?\n/', (string) $this->body))
        )));
    }
}
