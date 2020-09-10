<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BeritaCategory;
use App\Inkubator;
use App\User;

class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = ['tittle', 'slug', 'berita', 'berita_category_id', 'publish', 'author_id', 'inkubator_id', 'foto', 'views'];

    public function beritaCategory()
	{
	    return $this->belongsTo(BeritaCategory::class);
	}

	public function inkubator()
	{
		return $this->belongsTo(Inkubator::class);
	}

	public function user()
	{
		return $this->belongsTo('App\User', 'user_id');
	}
}
