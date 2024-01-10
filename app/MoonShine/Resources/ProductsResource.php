<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class ProductsResource extends ModelResource
{
    protected string $model = Products::class;

    protected string $title = 'Товары';

    protected string $column = 'id';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Заголовок', 'title'),
                Text::make('Текст', 'text'),
                Image::make('Картинка', 'url')->disk('public_folder')->dir('images'),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
