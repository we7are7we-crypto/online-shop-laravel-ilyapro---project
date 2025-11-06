<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('profile')
                ->label('تصویر پروفایل')
                ->defaultImageUrl('/images/nigna.jpg')
                //->stacked() //برای کوچک کردن
                ->circular(),

                TextColumn::make('admin')
                ->label('مدیر')
                    ->searchable(),
                TextColumn::make('staff')
                 ->label('همکار')
                    ->searchable(),
                TextColumn::make('instructor')
                 ->label('فروشنده')
                    ->searchable(),
                TextColumn::make('name')
                 ->label('نام')
                    ->searchable(),
                TextColumn::make('username')
                 ->label('نام کاربری')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('ادرس ایمیل')
                    ->searchable(),
                TextColumn::make('mobile')
                 ->label('شماره موبایل')
                    ->searchable(),
                TextColumn::make('status')
                 ->label('وضعیت')
                    ->searchable()
                       ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('verify')
                 ->label('وضعیت تایید')
                    ->searchable()
                       ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('wallet')
                 ->label('کیف پول')
                    ->searchable(),
                TextColumn::make('email_verified_at')
                 ->label('وضعیت تایید ایمیل')
                    ->dateTime()
                    ->sortable()
                       ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
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
