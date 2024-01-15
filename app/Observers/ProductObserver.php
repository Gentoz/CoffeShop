<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Facades\Artisan;

class ProductObserver
{
    /**
     * После сохранения в БД
     *
     * @param Product $product
     * @return void
     */
    public function created(Product $product): void
    {
        Artisan::call('sitemap:generate');
    }

    /**
     * После удаления в БД
     *
     * @param Product $product
     * @return void
     */
    public function deleted(Product $product): void
    {
        Artisan::call('sitemap:generate');
    }
}
