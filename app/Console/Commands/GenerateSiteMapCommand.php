<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;

class GenerateSiteMapCommand extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Command description';

    public function handle(): void
    {
        Sitemap::create()
            ->add(route('index'))
            ->add(Product::all())
            ->writeToFile(public_path('sitemap.xml'));
    }
}
