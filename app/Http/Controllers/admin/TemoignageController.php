<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Temoignages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $temoignages = Temoignages::orderBy('id', 'asc')->paginate('16');
     
        return view('admin.temoignages.temoignages', [
                "temoignages" =>$temoignages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.temoignages.form', [

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
            'prenom' =>  'required|string|min:"2"',
            'image'=>'required|image|mimes:png,jpg',
            'temoignage' => 'required|string',
        ]);

        $newTemoi = new Temoignages();
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

        return to_route('admin.temoignages.index')->with('status', 'Témoignages Ajouter');


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
    public function edit(Temoignages $temoignage)
    {
        //

        return view('admin.temoignages.edit',[
            'temoignage'=>  $temoignage
          ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Temoignages $temoignage)
    {
        //
        $validated = $request->validate([
            'nom' =>  'required|string|min:"2"',
            'prenom' =>  'required|string|min:"2"',
            'image'=>'required|image|mimes:png,jpg',
            'temoignage' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('temoignages', 'public');
            $validated ['image'] = $imagePath ;
            Storage::disk('public')->delete($temoignage->image);
   
        }


        $temoignage->update($validated);
        // dd( $service);
        return to_route('admin.temoignages.index')->with('status', 'Témognage  Modifier');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Temoignages $temoignage)
    {
        //
        Storage::disk('public')->delete($temoignage->image);
        $temoignage->delete();
        return to_route('admin.temoignages.index')->with('status', 'Temoignage supprimer avec success');

    }


    public function accept_temoignage(Temoignages $temoignage) {
            $accept = Temoignages::find($temoignage);
            $accept->status =  "active";
            $accept->save();

            return redirect()->back()->with('status', 'Temoignage Acceptez');

    }


    public function reject_temoignage(Temoignages $temoignage) {
     
        $accept = Temoignages::find($temoignage);
        $accept->status =  "reject";
        $accept->save();

        return redirect()->back()->with('status', 'Temoignage Réjétez');
}
} 
