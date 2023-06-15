<?php

namespace App\Mail;

use App\Models\EmailSetting;
use Ichtrojan\Otp\Models\Otp;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use App\Notifications\CustomerRegister;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use PharIo\Manifest\Email;
use Symfony\Component\Mailer\Messenger\SendEmailMessage;
use Symfony\Component\Mime\Test\Constraint\EmailHasHeader;

use function PHPUnit\Framework\equalTo;

class customerMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    protected $user;
    protected $otp;
    public function __construct($user, $otp)
    {
        $this->user = $user;
        $this->otp = $otp;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $email_setting = EmailSetting::all();
        foreach ($email_setting as $row) {
            return new Envelope(
                from: new Address($row->email_send,$row->title),
                subject: 'Confirm your account',
            );
        }
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $email_setting = EmailSetting::all();
        return new Content(
            markdown: 'mail.send',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
            return [];
    }
    public function build()
    {
        return $this->view('mail.send')->with(['user' => $this->user])->with(['otp' => $this->otp]);
    }
}
