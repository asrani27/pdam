<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    public function infrastruktur()
    {
        return $this->belongsTo(Infrastruktur::class, 'infrastruktur_id');
    }
}
