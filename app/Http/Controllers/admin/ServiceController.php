<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $services = Service::orderBy('id', 'asc')->paginate('16');
        return view('admin.services.services', [
            'services' =>$services
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.services.form', [

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'title' =>  'required|string|min:"2"',
            'image'=>'required|image|mimes:png,jpg',
            'description' => 'required|string',
        ]);

        $newService = new Service() ;
        $newService->title = $request->title;
        $newService->description = $request->description;

        if ($request->hasFile('image')) {
            // $imagePath = $request->file('image')->store('image', 'public');
            // $newImage->image = $imagePath;

            $imagePath = 'public/images/services';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName(); 
            $path =  $request->file('image')->storeAs($imagePath,$image_name  );
             $newService->image = $image_name;
            
        }

        $newService->save();

        return to_route('admin.services.index')->with('status', 'Service Ajouter');
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
    public function edit(Service $service)
    {
        //

        return view('admin.services.edit',[
            'service'=>  $service
          ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
        // $service =  Service::find($id);

        // dd($service);
        $validated = $request->validate([
            'title' =>  'required|string|min:"2"',
            'image'=>'required|image|mimes:png,jpg',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public');
            $validated ['image'] = $imagePath ;

            Storage::disk('public')->delete($service->image);

        }

        $service->update($validated);
        // dd( $service);
        return to_route('admin.services.index')->with('status', 'Service Ajouter');  





    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
        Storage::disk('public')->delete($service->image);
      
        $service->delete();
        return to_route('admin.services.index')->with('status', 'Service Ajouter');

    }
}
