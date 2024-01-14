<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class ProductsResource extends ModelResource
{
    protected string $model = Product::class;

    protected string $title = 'Товары';

    protected string $column = 'id';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Заголовок', 'title'),
                Text::make('Текст', 'text'),
                Number::make('Цена', 'price'),
                Image::make('Картинка', 'url')->disk('public')->dir('products'),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'title' => ['required', 'string'],
            'text' => ['required', 'string'],
            'price' => ['integer'],
            'url' => ['required', 'file'],
        ];
    }
}
