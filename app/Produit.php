<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    //
    protected $fillable = ['nomproduit', 'categorie'];
    public function details(){
        return $this->hasOne('App\Detail');
    }
}
