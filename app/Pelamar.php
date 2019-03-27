<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
  protected $fillable = ['nama', 'jenis_kelamin', 'email', 'no_telepon', 'file_pdf', 'status'];
}
