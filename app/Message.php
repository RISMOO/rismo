<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function user(){

        return $this->belongsTo('App\User');
        //chaque demande doit etre relié a notre utilisateur
        // ici une chaque  demande appartient a un seul  utilisateur

}
}
