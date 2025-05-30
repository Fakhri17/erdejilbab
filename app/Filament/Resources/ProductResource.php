<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Faker\Core\File;
use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Set;
use Filament\Support\RawJs;
use Illuminate\Support\Str;



class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    protected static ?string $navigationLabel = 'List Produk';
    protected static ?string $pluralModelLabel = 'List Produk';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Product')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Produk')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                            ->maxLength(255),
                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(255),
                        Select::make('product_category_id')
                            ->label('Kategori')
                            ->required()
                            ->relationship('category', 'name'),
                        TextInput::make('price')
                            ->label('Harga')
                            ->required()
                            ->numeric()
                            ->minValue(0)
                            ->placeholder('Rp. 0'),

                        FileUpload::make('product_images')
                            ->label('Gambar Produk')
                            ->image()
                            ->multiple()
                            ->imageEditor()
                            ->maxSize(2048)
                            ->directory('products')
                            ->helperText('Ukuran maksimal 2MB')
                            ->panelLayout('grid')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg'])
                            ->columnSpanFull(),


                        RichEditor::make('description')
                            ->label('Deskripsi Produk')
                            ->required()
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'h1',
                                'h2',
                                'h3',
                                'bold',
                                'italic',
                                'underline',
                                'strikeThrough',
                                'codeBlock',
                                'blockquote',
                                'bulletedList',
                                'numberedList',
                                'link',
                            ]),
                        // tiktok link
                        TextInput::make('tiktok_link')
                            ->label('Tiktok Link')
                            ->url()
                            ->placeholder('https://www.tiktok.com/@username/video/1234567890'),
                        // shopee link
                        TextInput::make('shopee_link')
                            ->label('Shopee Link')
                            ->url()
                            ->placeholder('https://shopee.co.id/product/1234567890'),

                        
                    ])
                    ->columns(2)
                    ->columnSpan(2),
                Section::make('Publish')
                    ->schema([

                        Checkbox::make('is_best_seller')
                            ->label('Produk Unggulan (Best Seller)'),
                        Checkbox::make('is_published')
                            ->label('Is Published')
                            ->helperText('Centang jika produk sudah siap dipublikasikan.'),

                    ])
                    ->columnSpan(1)
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Produk')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('category.name')
                    ->label('Kategori')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('price')
                    ->label('Harga')
                    ->sortable()
                    ->formatStateUsing(fn(string $state): string => 'Rp' . number_format($state, 0, ',', '.')),
                TextColumn::make('is_published')
                    ->label('Status')
                    ->badge()
                    ->getStateUsing(fn($record) => $record->is_published ? 'Published' : 'Draft')
                    ->color(fn($record) => $record->is_published ? 'success' : 'danger')
                    ->icon(fn($record) => $record->is_published ? 'heroicon-o-check-circle' : 'heroicon-o-x-circle')
                    ->sortable(),
                TextColumn::make('is_best_seller')
                    ->label('Best Seller')
                    ->badge()
                    ->getStateUsing(fn($record) => $record->is_best_seller ? 'Ya' : 'Tidak')
                    ->color(fn($record) => $record->is_best_seller ? 'success' : 'secondary')
                    ->icon(fn($record) => $record->is_best_seller ? 'heroicon-o-star' : null)
                    ->sortable(),
            ])->filters([
                //
            ])->actions([
                //
            ])->bulkActions([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->color('info'),
                Tables\Actions\DeleteAction::make()
                    ->color('danger'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
