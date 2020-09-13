<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\kategori;
use App\Inkubator;
use App\profil_user;

class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = ['tittle', 'slug', 'berita', 'berita_category_id', 'publish', 'author_id', 'inkubator_id', 'foto', 'views'];

    public function beritaCategory()
	{
	    return $this->belongsTo(kategori::class);
	}

	public function inkubator()
	{
		return $this->belongsTo(Inkubator::class);
	}

	public function profil_user()
	{
		return $this->belongsTo(profil_user::class);
	}
}
