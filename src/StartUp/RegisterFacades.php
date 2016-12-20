<?php

namespace IdeaSeven\Notifications\StartUp;


use App;
use Illuminate\Support\ServiceProvider;

/**
 * Register your Facades/aliases here
 * Class RegisterFacades
 * @package IdeaSeven\Notifications\StartUp
 */
class RegisterFacades
{
    /**
     * @param ServiceProvider $serviceProvider
     */
    public function handle(ServiceProvider $serviceProvider)
    {

        /**
         * Register Facades
         */
        $facades = \Illuminate\Foundation\AliasLoader::getInstance();
//        $facades->alias('ModuleRegistry', \IdeaSeven\Notifications\Facades\ModuleRegistryFacade::class);
        
    }
}