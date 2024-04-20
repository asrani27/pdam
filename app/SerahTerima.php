<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SerahTerima extends Model
{
    protected $table = 'serah_terima';
    protected $guarded = ['id'];
    public function infrastruktur()
    {
        return $this->belongsTo(Infrastruktur::class, 'infrastruktur_id');
    }
}
