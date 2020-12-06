<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    //
    public function index()
    {
        return view('admin.detail');
    } 

    public function detailProduit($id){
        $produitsdetail =    Produit::join('details', 'details.detail_id', '=', 'produits.id')
                            ->where('produits.id', $id)
                            ->get();
       
                         

        return view('admin.detail', ["detailproduit" => $produitsdetail]);
    }
}


