<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teknisi extends Model
{
    protected $table = 'teknisi';
    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'departemen_id');
    }
}
