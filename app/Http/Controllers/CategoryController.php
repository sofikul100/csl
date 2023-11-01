<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Categorie::orderBy('id', 'DESC')->get();
        return view('adminpanel.categorie.categories', compact('categories'));
    }


    public function addForm()
    {
        return view('adminpanel.categorie.categorie_add');
    }


    public function addCategorie(Request $request)
    {
        $request->validate([
            'name' => 'required|max:40'
        ]);
        $categorie = new Categorie();
        $categorie->name = $request->name;
        $categorie->save();

        return redirect()->route('categorie.index')->with('message', 'Categorie Added Successfully');
    }

    public function editCategorie ($categorie_id){
        $categorie= Categorie::findOrFail($categorie_id);
        if(!$categorie){
            abort(404);
        }
        return view('adminpanel.categorie.categorie_edit',compact('categorie'));
    }



    public function updateCategorie (Request $request,$categorie_id){
        $request->validate([
            'name' => 'required|max:40'
        ]);

        $categorie= Categorie::findOrFail($categorie_id);
        if(!$categorie){
            abort(404);
        }

        $categorie->name = $request->name;
        $categorie->save();
        return redirect()->route('categorie.index')->with('message', 'Categorie Updated Successfully');

    }






    public function deleteCategorie ($categorie_id){
        $categorie= Categorie::findOrFail($categorie_id);
        if(!$categorie){
            abort(404);
        }

        $categorie->delete();
        return redirect()->route('categorie.index')->with('message', 'Categorie Deleted Successfully');
    }






}
