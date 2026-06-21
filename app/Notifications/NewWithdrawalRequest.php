<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class NewWithdrawalRequest extends Notification
{
    use Queueable;

    public $withdraw;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($withdrawalRequest)
    {
        $this->withdraw = $withdrawalRequest;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $user = strtok(Auth::user()->name, ' ');
        return (new MailMessage)
            ->greeting("Dear {$user}")
            ->line("You have requested for a withdrawal of {$this->withdraw->amount}.")
            ->line('Your request is being processed.')
            ->line('Thank you for using COINYIELD!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'message' => "New withdrawal request from " . Auth::user()->name
        ];
    }
}
