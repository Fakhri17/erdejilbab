<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Form;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use App\Models\SiteSetting;
use Filament\Support\Exceptions\Halt;

class SiteSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';
    protected static ?string $navigationLabel = 'Pengaturan Toko';
    protected static string $view = 'filament.pages.site-settings';

    public ?array $settings = [];

    public function mount(): void
    {
        $this->form->fill(SiteSetting::firstOrCreate()->toArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Toko')->schema([
                    TextInput::make('store_name')
                        ->label('Nama Toko')
                        ->required()
                        ->default('Erde Jilbab'),
                    TextInput::make('phone_number')
                        ->tel()
                        ->label('Nomor Telepon'),
                    // TextInput::make('address')
                    //     ->label('Alamat'),
                    // Textarea::make('store_description')
                    //     ->label('Deskripsi Toko')
                    //     ->rows(4),
                    TextInput::make('tiktok_link')
                        ->label('Link TikTok')
                        ->url()
                        ->placeholder('https://tiktok.com/@username')
                        ->helperText('Masukkan link TikTok produk'),
                    TextInput::make('shopee_link')
                        ->label('Link Shopee')
                        ->url()
                        ->placeholder('https://shopee.co.id/username')
                        ->helperText('Masukkan link Shopee produk'),

                    // FileUpload::make('store_logo')
                    //     ->label('Logo')
                    //     ->image()
                    //     ->acceptedFileTypes(['image/*'])
                    //     ->maxSize(2048)
                    //     ->imageEditor()
                    //     ->directory('images'),
                    // FileUpload::make('store_banner')->label('Banner')
                    //     ->image()->directory('banners')->imagePreviewHeight('150'),
                ]),
            ])
            ->statePath('settings');
    }

    public function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Simpan Pengaturan')
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        try {
            $data = $this->form->getState();

            $setting = SiteSetting::firstOrCreate();
            $setting->update($data);
        } catch (Halt $e) {
            return;
        }

        Notification::make()
            ->success()
            ->title('Pengaturan berhasil disimpan.')
            ->send();
    }
}
