<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Skola;
use App\Models\Ucenica;

class Uciteljica extends Model
{
    use HasFactory;
    protected $fillable = [
        'ime',
        'prezime',
        'maticni_broj',
        'skola_id'
    ];

    public function skola()
    {
        return $this->belongsTo(Skola::class);
    }

    public function ucenica()
    {
        return $this->hasMany(Ucenica::class);
    }



}
