<?php

namespace IdeaSeven\Notifications\Installer\AfterUpdate;


use IdeaSeven\Core\Models\UpdatesLog;
use IdeaSeven\Notifications\Installer\AfterUpdate\CreateMissingTable\CreateNotificationsTables;
use Illuminate\Console\Command;

class CreateMissingTable
{
    public function handle(Command $command, UpdatesLog $item)
    {
        $classes = [
            CreateNotificationsTables::class
        ];

        foreach ($classes as $class) {
            (new $class())->handle($command);
        }

        $item->result = true;
        $item->save();
        $command->comment('All done in CreateMissingTable');
    }
}