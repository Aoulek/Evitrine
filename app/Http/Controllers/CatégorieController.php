<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catégorie;

class CatégorieController extends Controller
{
    public function index(Request $request)
    {
        return view('catégories.catégories');

    }
    //--- lister les catégories ---
    public function list()
    {
          $catégories = Catégorie::all();
          return view('catégories.catégories', ['catégories' => $catégories]);
    }
    //----- enregistrer les données dans la BDD ---
    public function save(Request $request)
    {
        $catégorie = new Catégorie;
        $catégorie->nomCat = $request->input('nomCat');
        $catégorie->user_id = auth()->user()->id;
        $catégorie->save();
        return redirect('catégories');
    }
     //---- Modifier une catégorie --------
     public function edit($id)
     {
         $catégorie = Catégorie::find($id);
         return view('catégories.edit', ['catégorie' => $catégorie]);
     }
     //--- Enregistrer les modifications ---------
     public function update(Request $request, $id)
     {
         $catégorie = Catégorie::find($id);
         $catégorie->nomCat = $request->input('nomCat');
        $catégorie->save();
         return redirect('catégories');
     }
    //------- Supprimer une catégorie -----
    public function delete($id)
    {
            $categorie = Categorie::find($id);
            $categorie->delete();
           return redirect('catégories');
    }

 }
