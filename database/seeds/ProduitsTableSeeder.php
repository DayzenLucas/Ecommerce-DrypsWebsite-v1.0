<?php

use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Création des produits !

        $produit= new \App\Produit();
        $produit->name ="Votre NOM Produit";
        $produit->prix_ht = 25;
        $produit->description = "VOTRE PRODUIT";
        $produit->photo_principale = "images.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->name ="Votre NOM Produit2";
        $produit->prix_ht = 26;
        $produit->description = "VOTRE PRODUIT";
        $produit->photo_principale = "images.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->name ="Votre NOM Produit3";
        $produit->prix_ht = 27;
        $produit->description = "VOTRE PRODUIT";
        $produit->photo_principale = "images.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->name ="Votre NOM Produit4";
        $produit->prix_ht = 28;
        $produit->description = "VOTRE PRODUIT";
        $produit->photo_principale = "images.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->name ="Votre NOM Produit5";
        $produit->prix_ht = 29;
        $produit->description = "VOTRE PRODUIT";
        $produit->photo_principale = "images.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->name ="Votre NOM Produit6";
        $produit->prix_ht = 30;
        $produit->description = "VOTRE PRODUIT";
        $produit->photo_principale = "images.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->name ="Votre NOM Produit7";
        $produit->prix_ht = 25;
        $produit->description = "VOTRE PRODUIT";
        $produit->photo_principale = "images.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->name ="Votre NOM Produit8";
        $produit->prix_ht = 25;
        $produit->description = "VOTRE PRODUIT";
        $produit->photo_principale = "images.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->name ="Votre NOM Produit9";
        $produit->prix_ht = 25;
        $produit->description = "VOTRE PRODUIT";
        $produit->photo_principale = "images.jpg";
        $produit->save();
    }

}
