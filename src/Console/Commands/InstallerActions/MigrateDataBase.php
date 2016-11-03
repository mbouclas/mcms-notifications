<?php

namespace Mcms\Notifications\Console\Commands\InstallerActions;


use Illuminate\Console\Command;

class MigrateDataBase
{
    public function handle(Command $command)
    {
        $command->call('vendor:publish', [
            '--provider' => 'Mcms\Notifications\NotificationsServiceProvider',
            '--tag' => ['migrations'],
        ]);

        $command->call('migrate');

        $command->comment('* Database migration complete');
    }
}