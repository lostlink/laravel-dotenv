<?php

namespace Lostlink\LaravelDotenv\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class DotenvPullCommand extends Command
{
    public $signature = 'dotenv:pull
        {--u|url=}
        {--p|project=}
        {--t|target=}
        {--e|environment=}
    ';

    public $description = 'Pull and update your .env file';

    public function handle(): int
    {
        $url = $this->option('url') ?? config('dotenv.url');
        $projectSlug = $this->option('project');
        $targetSlug = $this->option('target');
        $environmentSlug = $this->option('environment');

        $this->validate();

        $apiUrl = collect([
            $url,
            'api',
            $projectSlug,
            $targetSlug,
            $environmentSlug,
        ])->implode('/');

        $response = Http::withToken(config('dotenv.token'))
            ->get($apiUrl);

        echo $response->body();

        return self::SUCCESS;
    }

    private function validate()
    {
        if (is_null($this->option('project'))) {
            $this->error('Missing Project slug: --project=XXX');
            exit(1);
        }

        if (is_null($this->option('target'))) {
            $this->error('Missing Target slug: --target=XXX');
            exit(1);
        }

        if (is_null($this->option('environment'))) {
            $this->error('Missing Environment slug: --environment=XXX');
            exit(1);
        }
    }
}
