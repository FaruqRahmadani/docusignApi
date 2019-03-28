<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PelamarProses extends Mailable
{
  use Queueable, SerializesModels;

  /**
  * Create a new message instance.
  *
  * @return void
  */
  public function __construct($pelamar, $status)
  {
    $this->pelamar = $pelamar;
    $this->status = $status;
  }

  /**
  * Build the message.
  *
  * @return $this
  */
  public function build()
  {
    $pelamar = $this->pelamar;
    $status = $this->status;
    return $this->view('mail.pelamarProses', compact('pelamar', 'status'));
  }
}
