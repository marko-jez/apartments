<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GeneralInquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public array $data)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {

        $subject = sprintf(
            'Opći upit | %s | %d odraslih%s',
            $this->data['full_name'],
            $this->data['adults'],
            isset($this->data['children']) ? ' + ' . (int)$this->data['children'] . 'djece' : ''
        );

        return new Envelope(
            subject: $subject,
            replyTo: [
                new Address($this->data['email'], $this->data['full_name'] ?? null),
            ],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.general_inquiry',
            with: [
                'data' => $this->data,
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

    public function build()
    {
        $subject = sprintf(
            'Apartmani upit | %s | %d odraslih%s',
            $this->data['full_name'],
            $this->data['adults'],
            isset($this->data['children']) ? ' + ' . (int)$this->data['children'] . ' djece' : ''
        );

        return $this->subject($subject)
        ->replyTo($this->data['email'])
        ->markdown('emails.general_inquiry');
    }
}
