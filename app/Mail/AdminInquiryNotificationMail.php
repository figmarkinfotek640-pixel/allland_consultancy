<?php

namespace App\Mail;

use App\Models\Inquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminInquiryNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Inquiry $inquiry)
    {
    }

    public function envelope(): Envelope
    {
        $subject = 'New Student Enquiry: ' . $this->inquiry->name;
        if (!empty($this->inquiry->destination)) {
            $subject .= ' (' . $this->inquiry->destination . ')';
        }

        return new Envelope(
            from: new Address(config('mail.from.address', 'alllandtravelsenquiry@gmail.com'), 'All land Consultancy'),
            subject: $subject,
            replyTo: [
                new Address($this->inquiry->email, $this->inquiry->name),
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.admin-inquiry-notification',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
