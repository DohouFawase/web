<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $category = Categories::orderBy('id', 'desc')->paginate(12)->get();
        return view('admin.categories.categorie', [
            // 'category' => $category
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       

        return view('admin.categories.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nom' =>  'required|string|min:"2"'
        ]);
        
        $category = new Categories();
        $category->nom = $request->nom;

        $category->save();

        return to_route('admin.categories.index')->with('message',"Categorie ajouter avec succes");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('admin.categories.edit');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $categories)
    {
        //
        $findCat = Categories::find($categories);
        $validated = $request->validate([
            'nom' =>  'required|string|min:"2"',
            ''=>'required|image|mimes:png,jpg'
        ]);

        $findCat->update($validated);
        return to_route('admin.categories.index')->with('message',"Categorie Modifier avec succes");


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories)
    {
        //
    }
}
