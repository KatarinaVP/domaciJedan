<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Uciteljica;
use App\Models\Ucenica;

class Skola extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'kategorija_skole',
    ];

    public function uciteljica()
    {
        return $this->hasMany(Uciteljica::class);
    }

    public function ucenica()
    {
        return $this->hasManyThrough(Ucenica::class, Uciteljica::class);
    }

}
