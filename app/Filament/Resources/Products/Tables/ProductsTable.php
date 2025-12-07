<?php

namespace App\Filament\Resources\Products\Tables;

use App\Models\Product;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Enums\Width;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextInputColumn;
use Hamcrest\Description;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('pic') // بجای profile
    ->label('عکس محصول')
    ->defaultImageUrl('/images/nigna.jpg')
    ->Width(300)

    ->circular(),
                TextInputColumn::make('title')
                ->label('عنوان محصول')
                    ->searchable(),
               // TextColumn::make('link')
                 //->label('لینک محصول')
                   // ->searchable(),
                TextColumn::make('sku')
                    ->label('SKU')
                    ->searchable(),
                TextInputColumn::make('count')
                ->label('تعداد محصول')
                    ->searchable(),
                TextColumn::make('material')
                ->label('متریال محصول')
                    ->searchable(),
                TextColumn::make('weight')
                ->label('وزن محصول')
                    ->searchable(),
                TextColumn::make('price')
                ->label('قیمت محصول')
                ->suffix(' تومان ')
                ->numeric()
                ->description(fn(Product $product):string=>'قیمت تخفیف خورده:'.number_format($product->discount_price).'تومان' ?? '')                    ->searchable(),
               // TextColumn::make('discount_price')
                //-//>label('قیمت تخفیف خورده')
                 //->label('قیمت محصول')
                //->suffix(' تومان ')
                //->numeric()
                    //,
               // TextColumn::make('status')
                 //->label('وضعیت محصول')
                    //->searchable(),
                      SelectColumn::make('status')
                      ->placeholder('انتخاب وضعیت')
                      ->options([
                        '0' => 'نا موجود',
                        '1' => 'موجود در فروشگاه',
                        '2' => 'موجود در انبار',
                      ])
                      ->native(false)
                      ->searchableOptions()
                       ->label('وضعیت محصول'),

                TextColumn::make('instructor')
                ->label('فروشنده')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('created_at')
                ->label('تاریخ ایجاد محصول')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                ->label('تاریخ ویرایش محصول')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
