<?php

namespace Rmsramos\SystemInfo\Filament\Widgets;

use Filament\Widgets\Widget;
use Rmsramos\SystemInfo\SystemInfoPlugin;

class SystemInfoWidget extends Widget
{
    public static function getSort(): int
    {

        return SystemInfoPlugin::get()->getSort() ?? -1;
    }

    protected static bool $isLazy = false;

    protected static string $view = 'system-info::filament.widgets.system-info';
}
