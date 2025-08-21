<?php

namespace AlexKassel\PackageTemplate\Commands;

use Illuminate\Console\Command;

class ExampleCommand extends Command
{
    protected $signature = 'package-template:example';

    protected $description = 'An example command for the package template.';

    public function handle(): void
    {
        $this->info('This is an example command from the Package Template.');
    }
}