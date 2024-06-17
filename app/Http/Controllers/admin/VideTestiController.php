<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\VideoTesmimoni;
use Illuminate\Http\Request;
use DOMDocument;

class VideTestiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $AffichVideos = VideoTesmimoni::all();
           
        return view ('admin.Video.videos',[
            'videos' =>  $AffichVideos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.Video.form', [
            
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
        VideoTesmimoni::create([
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
