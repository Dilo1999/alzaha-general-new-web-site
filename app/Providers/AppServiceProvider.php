<?php

namespace App\Providers;

use App\Mail\ResendApiTransport;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Mail::extend('resend', function (array $config = []) {
            return new ResendApiTransport(
                apiKey: $config['key'] ?? config('services.resend.key'),
                endpoint: $config['endpoint'] ?? config('services.resend.endpoint', 'https://api.resend.com'),
                timeout: (int) ($config['timeout'] ?? 10),
                verifySsl: filter_var($config['verify_ssl'] ?? true, FILTER_VALIDATE_BOOLEAN),
            );
        });

        // MySQL (e.g. MariaDB / older MySQL) has a 1000-byte index limit with utf8mb4.
        // Default string length 191 keeps unique indexes under that limit.
        Schema::defaultStringLength(191);

        // Use current request origin for storage URLs so Filament file previews
        // work without CORS (e.g. when using 127.0.0.1:8000 vs localhost).
        if (! $this->app->runningInConsole() && $this->app->request?->getHost()) {
            $url = $this->app->request->getSchemeAndHttpHost();
            config(['filesystems.disks.public.url' => $url.'/storage']);
        }
    }
}
