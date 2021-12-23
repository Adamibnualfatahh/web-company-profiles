<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\about;
use App\Models\gallery;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoregalleryRequest;
use App\Http\Requests\UpdategalleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_fr()
    {   $home = Home::all();
        $about = about::all();
         $gallery = DB::table('galleries') -> get();
        // mengirim data blog ke view 
        return view('frontend.gallery', ['gallery' => $gallery,
     'about' => $about,
            'home' => $home]);
    }
    public function index()
    {
         $gallery = DB::table('galleries') -> get();
        // mengirim data blog ke view 
        return view('dashboard.gallery', ['gallery' => $gallery]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.gallery-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoregalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoregalleryRequest $request)
    {
         $request->validate([
            'name' => 'required',
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Gallery::create($input);
     
        return redirect('/dashboard/gallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(gallery $gallery,$id)
    {
         $gallery = DB::table('galleries')->where('id', $id)->first();
        return view('dashboard.gallery-edit', compact('gallery'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategalleryRequest  $request
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategalleryRequest $request, gallery $gallery)
    {
     $request->validate([
            'name' => 'required',
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          $gallery->update($input);
    return redirect('/dashboard/gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(gallery $gallery,$id)
    {
        DB::table('galleries')->where('id', $id)->delete();
        return redirect('/dashboard/gallery');
    }
}
