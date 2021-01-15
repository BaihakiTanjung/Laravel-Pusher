<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['message'];
    // Mengizikan Menyimpan data ke colum message

    // Relasi ke table user untuk mengambil siapa pemilik pesan tersebut
    public function user()
    {
        // Kita Gunakan belongsto karena user bertindak sebagai data induk
        return $this->belongsTo(User::class);
    }
}
