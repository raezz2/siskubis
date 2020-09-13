<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilUser extends Model
{
	protected $table ='pendamping';
   	protected $fillable = [
       'inkubator_id', 'nama', 'jenkel', 'kontak', 'alamat', 'nik', 'foto', 'deskripsi', 'status'
    ];
}
