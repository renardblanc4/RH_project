<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    use HasFactory;

    // Spécifie le nom exact de la table
    protected $table = 'employe';

    // Autorise l'attribution en masse pour ces colonnes
    protected $fillable = [
        'nom',
        'situation_matrimoniale',
        'date_naissance',
        'adresse',
        'telephone',
        'date_recrutement',
        'email',
        'date_affectation',
        'nom_personne_urgence',
        'telephone_urgence',
        'fonction',
        'commission',
    ];
}
