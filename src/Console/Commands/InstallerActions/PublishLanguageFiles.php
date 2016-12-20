<?php

namespace IdeaSeven\Notifications\Console\Commands\InstallerActions;


use Illuminate\Console\Command;

/**
 * Class PublishLanguageFiles
 * @package IdeaSeven\Notifications\Console\Commands\InstallerActions
 */
class PublishLanguageFiles
{
    /**
     * @param Command $command
     */
    public function handle(Command $command)
    {
        $command->call('vendor:publish', [
            '--provider' => 'IdeaSeven\Notifications\NotificationsServiceProvider',
            '--tag' => ['lang'],
        ]);


        $command->call('core:translations:import');
        $command->comment('* Language files published');
    }
}