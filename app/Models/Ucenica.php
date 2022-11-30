<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Uciteljica;


class Ucenica extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'razred',
        'uciteljica_id'
    ];
     
    public function uciteljica()
    {
        return $this->belongsTo(Uciteljica::class);
    }


}
