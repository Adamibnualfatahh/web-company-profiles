<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\about;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreaboutRequest;
use App\Http\Requests\UpdateaboutRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $home = Home::all();
        $about = about::all();
        $about = DB::table('abouts') -> get();
        // mengirim data blog ke view 
        return view('dashboard.about', ['about' => $about,
        'about' => $about,
            'home' => $home,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.about-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreaboutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreaboutRequest $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        About::create($input);
     
        return redirect('/dashboard/about');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\about  $about
     * @return \Illuminate\Http\Response
     */
    public function show(about $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\about  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(about $about )
    {
       //
    }
    public function ubah(about $about ,$id)
    {
        $about = About::findOrFail($id);
        return view('dashboard.about-edit', [
          'about' => $about]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateaboutRequest  $request
     * @param  \App\Models\about  $about
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateaboutRequest $request, about $about)
    {
       $request->validate([
            
            'text' => 'required',
            'title' => 'required',
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
             $about->update($input);
             return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\about  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(about $about, $id)
    {
        DB::table('abouts')->where('id', $id)->delete();
        return redirect('/dashboard/about');
    }
}
