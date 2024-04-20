<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insfrastruktur extends Model
{
    protected $table = 'infrastruktur';
    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'departemen_id');
    }
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'pengguna_id');
    }
}
