<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = [
        "matricule",
        "noms",
        "sexe",
        "date_naissance",
        "classe_id",
     ];

     public function classes()
    {
        $this->belongsTo(Classe::class);
    
    }

  

}
