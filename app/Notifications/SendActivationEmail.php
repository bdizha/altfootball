<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendActivationEmail extends Notification implements ShouldQueue
{
    use Queueable;

    protected $token;

    /**
     * Create a new notification instance.
     *
     * SendActivationEmail constructor.
     * @param $token
     */
    public function __construct($token)
    {
        $this->token = $token;
        $this->onQueue('social');
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $message = new MailMessage;
        $message->subject('Your ALTFOOTBALL sign in link')
            ->greeting('Hi there')
            ->line('You asked us for a link to give you a super fast sign in to ALTFOOTBALL.')
            ->action('Get me in', route('auth.activate', ['token' => $this->token]))
            ->line("This is completely unique to you, so by clicking on it, you’ll be instantly and securely signed in to ALTFOOTBALL: no fuss, no delay, no passwords!")
            ->line("The link should open ALTFOOTBALL in another browser page. If it doesn’t, just copy and paste the link into a new window and you’ll still go straight to the right place.")
            ->line("And that’s it. One more click and you’re in. Enjoy!")
            ->line("This link can only be used once and will expire in 15 minutes. If it this happens before you get a chance to use it, that’s fine. Just go back to the ALTFOOTBALL homepage, re-enter your email address and we’ll send you a new link.");

        return ($message);

    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
