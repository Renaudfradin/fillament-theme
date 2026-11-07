<?php

namespace Renaud\FilamentFolioTheme;

use Filament\Contracts\Plugin;
use Filament\FontProviders\BunnyFontProvider;
use Filament\Panel;

class FolioThemePlugin implements Plugin
{
    public function getId(): string
    {
        return 'folio-theme';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        $panel
            ->font('Albert Sans', provider: BunnyFontProvider::class)
            ->serifFont('Lora', provider: BunnyFontProvider::class)
            ->colors(FolioThemeColor::palette());
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
