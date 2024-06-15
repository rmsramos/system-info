<?php

namespace Rmsramos\SystemInfo\Filament\Widgets;

use Filament\Widgets\Widget;

class SystemInfoWidget extends Widget
{
    //protected static ?int $sort = -2;

    protected static bool $isLazy = false;

    protected static string $view = 'system-info::filament.widgets.system-info';
}
