<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    //
    protected $fillable = ['prix', 'Description', 'Qte','image'];
    public function produits()
    {
        return $this->belongsTo('App\Produit');
    }
}
