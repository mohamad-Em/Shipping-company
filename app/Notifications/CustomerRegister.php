<?php

namespace App\Notifications;

use App\Mail\customerMail;
use Ichtrojan\Otp\Models\Otp as ModelsOtp;
use Ichtrojan\Otp\Otp as OtpOtp;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Mail;
use Otp;
class CustomerRegister extends Notification
{
    use Queueable;
    public $message;
    public $subject;
    public $formEmail;
    public $mailer;
    public $otp;
    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        $this->message = 'Use The Below Code Verification Process';
        $this->subject = 'Verification Needed';
        $this->formEmail = 'test@gmail.com';
        $this->mailer = 'smtp';
        $this->otp = new OtpOtp();
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable):MailMessage
    {
        $otp = $this->otp->generate($notifiable->email,6,40);
        return (new MailMessage)
        ->mailer('smtp')
        ->subject($this->subject)
        ->greeting('Hello '.$notifiable->name)
        ->line($this->message)
        ->line('code: '. $otp->token);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
