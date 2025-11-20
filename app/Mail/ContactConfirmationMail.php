<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class ContactConfirmationMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public string $name;
    public string $contactSubject;
    public string $contactMessage;

    /**
     * Create a new message instance.
     */
    public function __construct(
        string $name,
        string $subject,
        string $message
    ) {
        $this->name = $name;
        $this->contactSubject = $subject;
        $this->contactMessage = $message;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Thank You - We\'ve Received Your Message',
            from: new Address(
                config('mail.from.address', 'info@nava.com'),
                config('mail.from.name', 'Nava')
            ),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-confirmation',
            with: [
                'name' => $this->name,
                'subject' => $this->contactSubject,
                'message' => $this->contactMessage,
            ],
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
}

