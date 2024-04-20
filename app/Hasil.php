<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    protected $table = 'hasil';
    protected $guarded = ['id'];
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'jadwal_id');
    }
    public function teknisi()
    {
        return $this->belongsTo(Teknisi::class, 'teknisi_id');
    }
}
