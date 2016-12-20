<?php

namespace IdeaSeven\Notifications\StartUp;

use IdeaSeven\Core\Services\SettingsManager\SettingsManagerService;
use Illuminate\Support\ServiceProvider;

class RegisterSettingsManager
{
    public function handle(ServiceProvider $serviceProvider)
    {
        SettingsManagerService::register('notifications', 'notifications');
    }
}