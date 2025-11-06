<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                 ImageColumn::make('profile')
                ->label('تصویر پروفایل')
                ->defaultImageUrl('/images/nigna.jpg')
                ->imageHeight(300)   // ارتفاع تصویر
                ->imageWidth(300),    // عرض تصویر
                //->stacked() //برای کوچک کردن
               // ->circular(),
               /* TextEntry::make('profile')
                ->label('تصویر پروفایل')
                    ->columnSpanFull(),*/
                TextEntry::make('admin')
                ->label('مدیر سایت'),
                TextEntry::make('staff')
                ->label('همکار سایت'),
                TextEntry::make('instructor')
                ->label('فروشنده سایت'),
                TextEntry::make('name')
                ->label('نام و نام خانوادگی'),
                TextEntry::make('username')
                ->label('نام کاربری'),
                TextEntry::make('email')
                    ->label('ادرس ایمیل'),
                TextEntry::make('mobile')
                ->label('شماره موبایل'),
                TextEntry::make('status')
                ->label('وضعیت کاربر'),
                TextEntry::make('verify')
                ->label('وضعیت تایید کاربر'),
                TextEntry::make('wallet')
                ->label('موجودی کیف پول'),
                TextEntry::make('email_verified_at')
                ->label('تایید ایمیل')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('two_factor_secret')
                ->label('تایید دو مرحله ای')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('two_factor_recovery_codes')
                ->label('کد بازیابی تایید دو مرحله ای')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('two_factor_confirmed_at')
                ->label('کد اصالت سنجی تایید دو مرحله ای')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('created_at')
                ->label('تاریخ عضویت')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                ->label('تاریخ بروز رسانی پروفایل')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
