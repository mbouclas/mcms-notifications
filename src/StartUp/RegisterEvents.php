<?php

namespace IdeaSeven\Notifications\StartUp;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Support\ServiceProvider;

/**
 * Register your events here
 * Class RegisterEvents
 * @package IdeaSeven\Notifications\StartUp
 */
class RegisterEvents
{
    /**
     * @param ServiceProvider $serviceProvider
     * @param DispatcherContract $events
     */
    public function handle(ServiceProvider $serviceProvider, DispatcherContract $events)
    {

    }
}