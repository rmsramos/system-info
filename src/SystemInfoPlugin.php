<?php

namespace Rmsramos\SystemInfo;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Rmsramos\SystemInfo\Filament\Widgets\SystemInfoWidget;

class SystemInfoPlugin implements Plugin
{
    public function getId(): string
    {
        return 'system-info';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->widgets([
                SystemInfoWidget::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
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
