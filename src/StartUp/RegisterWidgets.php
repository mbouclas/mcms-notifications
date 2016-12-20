<?php

namespace IdeaSeven\Notifications\StartUp;

use Widget;

class RegisterWidgets
{
    public function handle()
    {
        Widget::create([
            'name' => 'recentNews',
            'instance' => \IdeaSeven\Notifications\Widgets\RecentNews::class
        ]);

        Widget::create([
            'name' => 'otherNews',
            'instance' => \IdeaSeven\Notifications\Widgets\RecentNews::class
        ]);
    }
}