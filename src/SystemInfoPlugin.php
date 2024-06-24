<?php

namespace Rmsramos\SystemInfo;

use Closure;
use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Concerns\EvaluatesClosures;
use Rmsramos\SystemInfo\Filament\Widgets\SystemInfoWidget;

class SystemInfoPlugin implements Plugin
{
    use EvaluatesClosures;

    public Closure | null | int $sort = null;

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

    public function setSort(Closure | int | null $value = null): static
    {
        $this->sort = $value;

        return $this;
    }

    public function getSort(): ?int
    {
        return $this->evaluate($this->sort);
    }

}
