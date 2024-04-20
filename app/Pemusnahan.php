<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemusnahan extends Model
{
    protected $table = 'pemusnahan';
    protected $guarded = ['id'];
    public function infrastruktur()
    {
        return $this->belongsTo(Infrastruktur::class, 'infrastruktur_id');
    }
}
