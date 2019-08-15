<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    protected $table = 'novel';

    protected $fillable = ['nama', 'status', 'gambar','penulis','tipe','slug'];

    public function chapter()
    {
        return $this->hasMany(Chapter::class);
    }

    public function getGambar()
    {
        if(!$this->gambar){
            return asset('images/post/post_not.jpg');
        }
        return asset('images/post/'.$this->gambar);
    }
}
