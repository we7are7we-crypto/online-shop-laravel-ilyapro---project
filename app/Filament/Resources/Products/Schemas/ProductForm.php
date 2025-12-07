<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                FileUpload::make('pic')
                    ->label('عکس محصول')
                    ->image()
                    ->directory('products')
                    ->nullable()
                    ->default(null)
                    ->columnSpanFull(),

                TextInput::make('title')
                    ->label('عنوان محصول')
                    ->required(),

                TextInput::make('link')
                    ->label('لینک محصول')
                    ->required(),

                TextInput::make('sku')
                    ->label('SKU')
                    ->required(),

                TextInput::make('count')
                    ->label('تعداد محصول')
                    ->required(),

                TextInput::make('material')
                    ->label('متریال محصول')
                    ->nullable()
                    ->default(null),

                TextInput::make('weight')
                    ->label('وزن محصول')
                    ->nullable()
                    ->default(null),

                TextInput::make('price')
                    ->label('قیمت محصول')
                    ->required(),

                TextInput::make('discount_price')
                    ->label('قیمت تخفیف خورده')
                    ->nullable()
                    ->default(null),

                Textarea::make('description')
                    ->label('توضیحات محصول')
                    ->nullable()
                    ->default(null)
                    ->columnSpanFull(),

                Textarea::make('detail')
                    ->label('جزئیات کامل محصول')
                    ->nullable()
                    ->default(null)
                    ->columnSpanFull(),

                Select::make('status')
                    ->label('وضعیت محصول')
                    ->default('1')
                    ->options([
                        '0' => 'نا موجود',
                        '1' => 'موجود در فروشگاه',
                        '2' => 'موجود در انبار',
                    ])
                    ->required(),

                TextInput::make('instructor')
                    ->label('فروشنده')
                    ->numeric()
                    ->nullable()
                    ->default(null),
            ]);
    }
}
