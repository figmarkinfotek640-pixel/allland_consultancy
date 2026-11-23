<?php

namespace App\Mail;

use App\Models\Inquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InquiryThankYouMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Inquiry $inquiry)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(config('mail.from.address', 'alllandtravelsenquiry@gmail.com'), 'All land Consultancy'),
            subject: 'Thank You for Your Enquiry | All land Consultancy',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.inquiry-thankyou',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
