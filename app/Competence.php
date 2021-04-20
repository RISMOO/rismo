<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    protected $fillables = [ 'id'];//Une fois que le tableau $fillable existe, Laravel va accepter d'envoyer nos données à la base de données
}
