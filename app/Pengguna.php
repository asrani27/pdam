<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'departemen_id');
    }
}
