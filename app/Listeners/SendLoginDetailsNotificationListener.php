<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\SendLoginDetailsNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class SendLoginDetailsNotificationListener implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $user = User::find($event->userId);
        Notification::send($user, new SendLoginDetailsNotification());
    }
}
