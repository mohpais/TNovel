<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table = 'chapter';

    protected $fillable = ['judul', 'chapter', 'description', 'novel_id', 'author','slug'];

    public function novel()
    {
        return $this->belongsTo(\App\Novel::class);
    }

}
