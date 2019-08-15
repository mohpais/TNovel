<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';
    protected $fillable = ['nama', 'nama_panggilan', 'status', 'alamat', 'avatar'];

    public function getAvatar()
    {
        if(!$this->avatar){
            return asset('images/default.jpg');
        }
        return asset('images/'.$this->avatar);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
