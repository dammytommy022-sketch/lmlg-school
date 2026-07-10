<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    protected $fillable = [
        'page',
        'section_key',
        'heading',
        'heading_accent',
        'subheading',
        'body',
        'cta_label',
        'cta_link',
    ];

    public function scopeForPage(Builder $query, string $page): Builder
    {
        return $query->where('page', $page);
    }

    protected function bodyParagraphs(): Attribute
    {
        return Attribute::get(fn () => array_values(array_filter(
            array_map('trim', preg_split('/\r?\n\r?\n/', (string) $this->body))
        )));
    }
}
