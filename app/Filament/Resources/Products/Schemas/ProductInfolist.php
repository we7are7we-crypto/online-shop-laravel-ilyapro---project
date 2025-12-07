<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\ImageEntry;
use Illuminate\Support\Facades\Storage;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('pic')
                    ->label('عکس محصول')
                    ->columnSpanFull(),

                TextEntry::make('title')
                    ->label('عنوان محصول'),

                TextEntry::make('link')
                    ->label('لینک محصول'),

                TextEntry::make('sku')
                    ->label('SKU'),

                TextEntry::make('count')
                    ->label('تعداد محصول'),

                TextEntry::make('material')
                    ->label('متریال محصول')
                    ->placeholder('-'),

                TextEntry::make('weight')
                    ->label('وزن محصول')
                    ->placeholder('-'),

                TextEntry::make('price')
                    ->label('قیمت محصول'),

                TextEntry::make('discount_price')
                    ->label('قیمت تخفیف خورده')
                    ->placeholder('-'),

                TextEntry::make('description')
                    ->label('توضیحات محصول')
                    ->placeholder('-')
                    ->columnSpanFull(),

                TextEntry::make('detail')
                    ->label('جزئیات کامل محصول')
                    ->placeholder('-')
                    ->columnSpanFull(),

                TextEntry::make('status')
                    ->label('وضعیت محصول'),

                TextEntry::make('instructor')
                    ->label('فروشنده')
                    ->numeric()
                    ->placeholder('-'),

                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),

                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
