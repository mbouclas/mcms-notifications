<?php

namespace Mcms\Notifications\StartUp;

use Mcms\Core\Services\SettingsManager\SettingsManagerService;
use Illuminate\Support\ServiceProvider;

class RegisterSettingsManager
{
    public function handle(ServiceProvider $serviceProvider)
    {
        SettingsManagerService::register('notifications', 'notifications');
    }
}