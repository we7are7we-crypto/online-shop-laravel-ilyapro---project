<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([


FileUpload::make('profile')
    ->label('عکس پروفایل')
    ->image()
    ->directory('users')
    ->nullable() // اختیاری باشه
    ->default(null), // مطمئن میشه اگر کاربر چیزی نداد، مقدار null ارسال بشه


                Select::make('admin')
                    ->label('مدیر سایت')
                    ->default('0')
                    ->options([
                        '0' => 'مدیر نیست',
                        '1' => 'مدیر سایت',
                    ])
                    ->required(),
                     Select::make('staff')
                    ->label('همکار پشتیبان')
                    ->default('0')
                    ->options([
                        '0' => 'همکار پشتیبان نیست',
                        '1' => 'همکار پشتیبان سایت',
                    ])
                    ->required(),
                     Select::make('instructor')
                    ->label('فروشنده')
                    ->default('0')
                    ->options([
                        '0' => 'فروشنده نیست',
                        '1' => 'فروشنده سایت',
                    ])
                    ->required(),


                TextInput::make('name')
                    ->label('نام و نام خانوادگی')
                    ->required(),

                    TextInput::make('username')
                    ->label('نام کاربری ')
                    ->default(null),

                    TextInput::make('mobile')
                    ->label('شماره موبایل')
                    ->required(),

                       TextInput::make('email')
                    ->label('ایمیل')
                    ->email()
                    ->required(),


                     DateTimePicker::make('email_verified_at')
                    ->label('تایید ایمیل')
                    ->required(),

                TextInput::make('password')
                    ->label('رمز عبور')
                    ->password()
                    ->required(),

                         TextInput::make('verify')
                    ->label('وضعیت تایید کاربر')
                    ->default('0')
                    ->required(),

                       TextInput::make('status')
                    ->label('وضعیت کاربر')
                    ->default('0')
                    ->required(),

                       TextInput::make('wallet')
                    ->label('موجودی کیف پول')
                    ->default('0')
                    ->required(),
            ]);
    }
}
