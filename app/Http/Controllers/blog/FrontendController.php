<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Image;
use App\Models\Service;
use App\Models\Temoignages;
use Illuminate\Http\Request;
use App\Models\Tags;
use App\Models\testimoni;
use App\Models\VideoTesmimoni;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    //
    public function home()

    {
        $services = Service::all();
        // dd($services);
        $testimonials = Temoignages::all();
        $videos = VideoTesmimoni::all();
        // dd($videos );
        $tags = Tags::all();
        $images = DB::table('images')
        ->join('articles', 'images.article_id', '=', 'articles.id')
        ->select('images.*', 'articles.title as article_title')
        ->get();
        // dd($images);

        return view ('home', [
            'services'  => $services,
            'tags'  => $tags,
             'images'  => $images,
             'testimonials' =>  $testimonials,
             'videos' =>  $videos
        ]);
    }

    public function blog()
    {
        // $images = Image::all();
        $images = DB::table('images')
        ->join('articles', 'images.article_id', '=', 'articles.id')
        ->select('images.*', 'articles.title as article_title')
        ->get();
// dd($images);
        return view ('blog',[
            'images'  => $images

        ] );
    }

    public function detail($id)
    {
        $article = Article::findOrFail($id);
        // $aricle = Article::find($image);
        // $articles= $image->article;
        return view ('article-detail', [
            'article' =>$article
        ]);
    }

    public function service()
    {
        $services = Service::orderBy('id', 'asc')->paginate(12);

        return view ('service', [
           'services'  => $services
        ]);
    }

    public function contact()
    {
        return view ('blogs.contact');
    }

    public function apropos()
    {
        return view ('blogs.apropos');
    }

    public function store(Request $request) 
    {
        $validated = $request->validate([
            'nom' =>  'required|string|min:"2"',
            'prenom' =>  'required|string|min:"2"',
            'image'=>'required|image|mimes:png,jpg',
            'temoignage' => 'required|string',
        ]);

        $newTemoi = new testimoni();
        $newTemoi->nom = $request->nom;
        $newTemoi->prenom = $request->prenom;
        $newTemoi->temoignage = $request->temoignage;
        if ($request->hasFile('image')) {
            // $imagePath = $request->file('image')->store('image', 'public');
            // $newImage->image = $imagePath;

            $imagePath = 'public/images/testimonials';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName(); 
            $path =  $request->file('image')->storeAs($imagePath,$image_name  );
             $newTemoi->image = $image_name;
            
        }
        $newTemoi->save();

        // dd($newTemoi);

        return back()->with('stauts','Témoignage ajouter avec success');
    
        // return redirect->with('status', 'Témoignages Ajouter');

    }
}
