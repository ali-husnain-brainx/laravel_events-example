<?php

namespace App\Listeners;

use App\Events\UserCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        $user = $event->user;
        if($user->name == 'husnain'){
            file_put_contents("sendEmailFile.txt",$user->name.PHP_EOL);
        } else {
            file_put_contents("sendEmailFile.txt",$user->email.PHP_EOL);
        }
    }
}
