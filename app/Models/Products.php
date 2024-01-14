<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

class Products extends Model implements Sitemapable
{
    protected $fillable = [
        'title',
        'text',
        'price',
        'url',
    ];

    public function toSitemapTag(): Url|string|array
    {
        // TODO: Implement toSitemapTag() method.
    }
}
