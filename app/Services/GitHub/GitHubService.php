<?php

declare(strict_types=1);

namespace App\Services\GitHub;

use Illuminate\Http\Client\PendingRequest;

final readonly class GitHubService
{
    public function __construct(
        private PendingRequest $request,
    ) {}
}
