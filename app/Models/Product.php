<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

class Product extends Model implements Sitemapable
{
    protected $fillable = [
        'title',
        'text',
        'price',
        'url',
    ];

    public function toSitemapTag(): Url|string|array
    {
        return route('product.show', $this);
    }
}
