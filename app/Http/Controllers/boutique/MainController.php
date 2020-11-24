<?php

namespace App\Http\Controllers\boutique;

use App\Produit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //Affichage page d'acceuil ['produits'=>$produits]
    public function index()
    {

        // SELECT * FROM produits; 
        //compact('produits')
        $produits = Produit::all();
        //dd($produits);
            

        return view('boutique.index',compact('produits') );

    }


    
    public function produit()
    {
        return view('boutique.produit');

    }
}
