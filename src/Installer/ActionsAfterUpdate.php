<?php

namespace IdeaSeven\Notifications\Installer;


use IdeaSeven\Notifications\Installer\AfterUpdate\CreateMissingTable;
use IdeaSeven\Notifications\Installer\AfterUpdate\PublishMissingConfig;
use IdeaSeven\Notifications\Installer\AfterUpdate\PublishMissingMigrations;
use IdeaSeven\Core\Exceptions\ErrorDuringUpdateException;
use IdeaSeven\Core\Helpers\Installer;
use IdeaSeven\Core\UpdatesLog\UpdatesLog;
use Illuminate\Console\Command;

class ActionsAfterUpdate
{
    protected $module;
    protected $version;

    public function __construct()
    {
        $this->module = 'mcms-notifications';
        $this->version = 1;
    }

    public function handle(Command $command)
    {
        /*
         * publish the missing migrations
         * publish the missing config
         * create the missing table media_library
         */

        $actions = [
            'PublishMissingMigrations' => PublishMissingMigrations::class,
            'PublishMissingConfig' => PublishMissingConfig::class,
            'CreateMissingTable' => CreateMissingTable::class,
        ];

        try {
            (new UpdatesLog($command, $this->module, $actions, $this->version))->process();
        }
        catch (ErrorDuringUpdateException $e){
            $command->error('Error during updating ' . $this->module);
        }

        return true;
    }
}