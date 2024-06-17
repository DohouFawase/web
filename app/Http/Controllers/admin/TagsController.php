<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tags = Tags::orderBy('id', 'asc')->paginate(12);
        return view('admin.tags.index', [
                'tags' => $tags
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.tags.form', [

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $valideData = $request->validate([
            'title' => 'required|string'
        ]);


        $CrateTage = new Tags();

        $CrateTage->title = $request->title;
        $CrateTage->save();
        return to_route('admin.tags.index')->with('status', 'Service Ajouter');


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
    public function edit(Tags $tag)
    {
        //
        return view('admin.tags.edit',[
          'tag'=>  $tag
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tags $tag)
    {
        //
        // $tag = Tags::find($tag);
        $valideData = $request->validate([
            'title' => 'required|string'
        ]);

        $tag->update($valideData);
        return to_route('admin.tags.index')->with('status', 'Tags Updated');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tags $tag)
    {
        //
        $tag->delete();

        return to_route('admin.tags.index')->with('status', 'Suppression Effectué ');
        
    }
}
