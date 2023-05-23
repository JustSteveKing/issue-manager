<?php

declare(strict_types=1);

namespace App\Commands\Config;

use App\Contracts\ConfigurationContract;
use LaravelZero\Framework\Commands\Command;

final class SetupCommand extends Command
{
    protected $signature = 'config:setup';

    protected $description = 'Configure the Issue Manager.';

    public function handle(ConfigurationContract $config)
    {
        $token = $this->components->ask(
            question: 'What is your GitHub API Token?',
        );

        if (! $token) {
            $this->components->warn(
                string: 'You need a GitHub API token to use this application.',
            );

            return Command::INVALID;
        }

        $config->set(
            key: 'token',
            value: $token,
        );

        $this->components->info(
            string: 'GitHub API token has been saved to local config.',
        );
    }
}
