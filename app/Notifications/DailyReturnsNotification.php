<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class DailyReturnsNotification extends Notification
{
    use Queueable;

    public $trans, $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($trans, $user)
    {
        $this->user = $user;
        $this->trans = $trans;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting("Dear ". strtok($this->user->name, ' '))
            ->subject('COINYIELD: Credit Info')
            ->line('Your account, has been funded successfully')
            ->line($this->trans->description)
            ->line('Thank you for using '.config('app.url').'!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
