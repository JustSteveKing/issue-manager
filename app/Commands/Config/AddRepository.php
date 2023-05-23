<?php

declare(strict_types=1);

namespace App\Commands\Config;

use App\Contracts\ConfigurationContract;
use LaravelZero\Framework\Commands\Command;

final class AddRepository extends Command
{
    protected $signature = 'config:add';

    protected $description = 'Add a new repository to the configuration.';

    public function handle(ConfigurationContract $config)
    {
        $stored = $config->all();

        $repo = $this->components->ask(
            question: 'What repository do you want to add?',
        );

        dd($stored);
    }
}
