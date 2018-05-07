<?php

namespace App\Notifications;

use App\Question;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AnswerNotification extends Notification
{
    use Queueable;

    Private $quest,$ans;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($questV, $ansV)
    {
        $this->question = $questV;
        $this->answer = $ansV;
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
        $url = url('/questions/'.$this->question.'/answers/'.$this->answer);
        return (new MailMessage)
                    ->greeting('Hello')
                    ->subject('Your question was answered')
                    ->line('One of your question was answered')
                    ->action('Review the answer', $url)
                    ->line('Thank you for using faq application!');
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
