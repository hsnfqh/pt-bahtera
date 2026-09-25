<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class ContactSubmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;
    public ?string $filePath;
    public ?string $originalFileName;

    /**
     * Create a new message instance.
     */
    public function __construct(array $data, ?string $filePath = null, ?string $originalFileName = null)
    {
        $this->data = $data;
        $this->filePath = $filePath;
        $this->originalFileName = $originalFileName;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $ref = $this->data['ref'] ?? 'BAS';
        $name = $this->data['name'] ?? 'Pelamar';
        $crewType = $this->data['crew_type'] ?? 'Lamaran Pelaut';

        return new Envelope(
            from: new Address(
                config('mail.from.address', 'ahmadhasanfaqih01@gmail.com'),
                "{$name} (Pelamar PT. BAS)"
            ),
            subject: "[PT. BAS] Pendaftaran / Berkas Baru: {$name} ({$crewType}) - Ref: {$ref}",
            replyTo: [
                new Address($this->data['email'], $this->data['name']),
            ],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-submission',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];

        if ($this->filePath && file_exists($this->filePath)) {
            $attachments[] = Attachment::fromPath($this->filePath)
                ->as($this->originalFileName ?? 'Berkas_Pelaut.pdf')
                ->withMime('application/pdf');
        }

        return $attachments;
    }
}
