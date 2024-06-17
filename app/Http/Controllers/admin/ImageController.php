<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         //
        $images = Image::orderBy('id', 'desc')->paginate(12);
        return view('admin.images.image', [
            'images' => $images
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $articles = Article::pluck("title", 'id');

        return view('admin.images.form', [
            "articles" =>  $articles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nom' =>  'required|string|min:"2"',
            'image'=>'required|image|mimes:png,jpg',
            'article_id' => 'required|exists:articles,id',
        ]);

        $newImage = new Image() ;
        $newImage->nom = $validated['nom'];
        $newImage->article_id = $validated['article_id'];

        if ($request->hasFile('image')) {
            // $imagePath = $request->file('image')->store('image', 'public');
            // $newImage->image = $imagePath;

            $imagePath = 'public/images/articles';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName(); 
            $path =  $request->file('image')->storeAs($imagePath,$image_name  );
             $newImage->image = $image_name;
            
        }

        // $newImage->article()->associate($validated['article_id']);
        $newImage->save();
        // $newImage->post()->associate($validated['article_id']);
        // dd($newImage);
        return to_route('admin.image.index')->with('status', 'Ajouter avec sucess ');



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
    public function edit(Image $image)
    {
        //
        $articles = Article::pluck("title", 'id');

        return view('admin.images.edit', [
            "articles" =>  $articles,
             "image" => $image
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
        $validated = $request->validate([
            'nom' =>  'required|string|min:"2"',
            'image'=>'required|image|mimes:png,jpg',
            'article_id' => 'required|exists:articles,id',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = 'public/images/articles';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName(); 
            $path =  $request->file('image')->storeAs($imagePath,$image_name  );
            // Storage::disk('public')->delete($image);

        }

        $image->update($validated);
        return to_route('admin.image.index')->with('status', 'Ajouter avec sucess ');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
        Storage::disk('public')->delete($image->image);
        $image->delete();
        return to_route('admin.image.index')->with('status', 'Image Supprimer');

    }
}
