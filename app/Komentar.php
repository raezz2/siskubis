<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Berita;
use App\User;

class Komentar extends Model
{
    protected $table ='berita_komentar';
    protected $fillable = [
        'name',
        'user_id',
        'komentar',
        'berita_id'

    ];
    // protected $guarded = [];
    
    // public function child()
    // {
    //     return $this->hasMany(Komentar::class, 'user_id');
    // }

    public function post()
    {
        return $this->belongsTo(Berita::class);
    }
    public function user()
    {
    return $this->belongsTo(User::class);
    }

}
