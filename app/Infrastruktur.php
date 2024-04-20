<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infrastruktur extends Model
{
    protected $table = 'infrastruktur';
    protected $guarded = ['id'];
    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'departemen_id');
    }
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'pengguna_id');
    }
}
