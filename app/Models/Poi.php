<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user () 
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function catatan_perjalanan () 
    {
        return $this->hasMany(CatatanPerjalanan::class);
    }

    public function rencana_perjalanan () 
    {
        return $this->hasMany(RencanaPerjalanan::class);
    }
}
