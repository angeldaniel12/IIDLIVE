<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PostNotification;
use App\Models\User;

class PostListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(NewPostEvent $event)
    {
        $post = $event->post;
        $followers = $post->user->followers; // Obtener los seguidores del usuario que publicó el post

        foreach ($followers as $follower) {
            $follower->notify(new NewPostNotification($post));
        }
    }
}
