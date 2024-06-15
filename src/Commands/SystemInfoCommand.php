<?php

namespace Rmsramos\SystemInfo\Commands;

use Illuminate\Console\Command;

class SystemInfoCommand extends Command
{
    public $signature = 'system-info';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
