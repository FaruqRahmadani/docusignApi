<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
  protected $fillable = ['nama', 'jenis_kelamin', 'email', 'no_telepon', 'file_pdf', 'status'];

  public function getStatusTextAttribute(){
    if ($this->status == 0) return "On Progress";
    if ($this->status == 1) return "Rejected";
    if ($this->status == 2) return "Accepted";
    if ($this->status == 3) return "Waiting for Sign";
    if ($this->status == 4) return "Signed";
    return "Something Wrong";
  }
  public function getUUIDAttribute(){
    return encrypt($this->id);
  }
}
