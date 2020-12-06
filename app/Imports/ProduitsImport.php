<?php

namespace App\Imports;

use App\Produit;
use Maatwebsite\Excel\Concerns\ToModel;

class ProduitsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Produit([
            //
            'nomproduit'     => $row['0'],
            'categorie'    => $row['1'],
           
            
        ]);
    }
}
