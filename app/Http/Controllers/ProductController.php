<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Http\Requests\StoreProduit;
use App\Imports\ProduitsImport;
use Illuminate\Http\Request;
use App\Produit;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produits = Produit::paginate(5);

        return view('admin.produit',["produits"=>$produits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.createproduit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduit $request)
    {
        //
    
        $produit = new Produit();
        $produit->nomproduit = $request->input('NomProduit');
        $produit->categorie = $request->input('Categorie');
        $produit->save();


        $path = $request->file('image')->store('details');

        $detail = new Detail();
        $detail->prix = $request->input('prix');
        $detail->Qte = $request->input('Qte');
        $detail->Description = $request->input('Description');
        $detail->image = $path;
        $detail->detail_id = $produit->id; 
        $detail->save();

       
         return redirect()->route('produit.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = Produit::join('details', 'details.id', '=', 'produits.id')
            ->where('produits.id', $id)
            ->get();
        //
        return view('admin.edit',['produitdetail'=>$prod]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     
        
        $path = $request->file('image')->store('details');
 
      $prod = Produit::join('details', 'details.id', '=', 'produits.id')
        ->where('produits.id', $id)
            ->update([
                'nomproduit' => $request->input('NomProduit'),
                'categorie' => $request->input('Categorie'),
                'prix' => $request->input('prix'),
                'Qte' => $request->input('Qte'),
                'Description' => $request->input('Description'),
                'image' => $path,
                ]);


        return redirect()->route('produit.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Produit::where('id', $id)->delete();
        return redirect()->route('produit.index');
    }

   public function cvsImpoter(Request $request){
        Excel::import(new ProduitsImport, $request->file('file')->store('filecvs'));
        return redirect()->route('produit.index');
   }
    


    }

