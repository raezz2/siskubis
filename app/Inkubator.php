<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Berita;

class Inkubator extends Model
{
    protected $table = 'Inkubator';

    public function berita()
    {
    	return $this->belongsTo(Berita::class);
    }
}
