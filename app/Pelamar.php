<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
  protected $fillable = ['nama', 'jenis_kelamin', 'email', 'no_telepon', 'file_pdf', 'status'];

  public function getStatusTextAttribute(){
    if ($this->status == 0) return "On Progress";
    if ($this->status == 1) return "Signed";
    if ($this->status == 2) return "Rejected";
    return "Something Wrong";
  }
  public function getUUIDAttribute(){
    return encrypt($this->id);
  }
}
