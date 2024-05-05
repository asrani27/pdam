<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teknisi extends Model
{
    protected $table = 'teknisi';
    public function rekanan()
    {
        return $this->belongsTo(Rekanan::class, 'rekanan_id');
    }
}
