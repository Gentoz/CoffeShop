<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSiteMapCommand extends Command
{
    protected $signature = 'generate:site-map';

    protected $description = 'Command description';

    public function handle(): void
    {
        SitemapGenerator::create('localhost')->writeToFile(public_path('sitemap.xml'));
    }
}
