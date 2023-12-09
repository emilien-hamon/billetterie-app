<?php

namespace App\Mail;

use App\Models\Client;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Database\Eloquent\Model;

class InfoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $model;
    public $action;

    public function __construct(User $user, Model $model, $action)
    {
        $this->user = $user;
        $this->model = $model;
        $this->action = $action;
    }
    /**
     * Create a new message instance.
     */


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Information sur la mise à jour',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.mail',
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
