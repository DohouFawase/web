<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Tags;
use Illuminate\Http\Request;
use DOMDocument;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $getArticle = Article::orderBy('id', 'asc')->paginate('5');
        $getArticle = Article::orderBy('id', 'asc')->get();

        return view('admin.articles.articles', [
            'getArticle'=>$getArticle  
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
      
        $tags = Tags::with('articles')->pluck('title', 'id');
        return view('admin.articles.form', [
           'tags' => $tags 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
   
        $description = $request->description;
 
        $dom = new DOMDocument();
         // Suppression des erreurs de chargement HTML5
        libxml_use_internal_errors(true);
        $dom->loadHTML('<?xml encoding="utf-8" ?>' . $description);
        libxml_clear_errors();
        $images = $dom->getElementsByTagName('img');
 
        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name = "/upload/" . time(). $key.'.png';
            file_put_contents(public_path().$image_name,$data);
 
            $img->removeAttribute('src');
            $img->setAttribute('src',$image_name);
        }

        $description = $dom->saveHTML();
        Article::create([
            'title' => $request->title,
            'description' => $description,
        ]);
       

        return to_route('admin.articles.index')->with('status', 'Service Ajouter');

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
    public function edit(Article $article)
    {
        //
        $tags = Tags::with('articles')->pluck('title', 'id');

        return view('admin.articles.edit',[
            'article'=>  $article,
            'tags' => $tags
          ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $Findarticle = Article::find($id);
        $description = $request->description;
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML('<?xml encoding="utf-8" ?>' . $description);
        libxml_clear_errors();
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $key => $img) {
 
            // Check if the image is a new one
            if (strpos($img->getAttribute('src'),'data:image/') ===0) {
               
                $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
                $image_name = "/upload/" . time(). $key.'.png';
                file_put_contents(public_path().$image_name,$data);
                 
                $img->removeAttribute('src');
                $img->setAttribute('src',$image_name);
            }
 
        }

        $description = $dom->saveHTML();
 
        $Findarticle->update([
            'title' => $request->title,
            'description' => $description
        ]);
 
        return to_route('admin.articles.index')->with('status', 'Articles Update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
      // Trouver l'article par son ID
    $article = Article::findOrFail($id);

    // Extraire la description de l'article
    $description = $article->description;

    // Créer un nouvel objet DOMDocument
    $dom = new DOMDocument();

    // Supprimer les erreurs de chargement HTML5
    libxml_use_internal_errors(true);
    $dom->loadHTML('<?xml encoding="utf-8" ?>' . $description);
    libxml_clear_errors();

    // Obtenir toutes les balises img de la description
    $images = $dom->getElementsByTagName('img');

    // Parcourir chaque image et supprimer le fichier associé
    foreach ($images as $img) {
        $src = $img->getAttribute('src');
        $filePath = public_path() . $src;

        // Vérifier si le fichier existe avant de le supprimer
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }

    // Supprimer l'article de la base de données
    $article->delete();

    return to_route('admin.articles.index')->with('status', 'Articles supprimer avec success');


    }
}
