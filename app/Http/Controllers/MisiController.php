<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\misi;
use App\Models\about;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $misi = DB::table('misis') -> get();
        return view('dashboard.misi', ['misi' => $misi]);
    }
     public function index_fr()
    {   $about = about::all();
        $home = Home::all();
         $homes = Home::all();
        $misi = DB::table('misis') -> get();
        return view('frontend.misi', ['misi' => $misi,'about' => $about,'home' => $home,'homes' => $homes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $misi = misi::findOrFail($id);
        return view('dashboard.misi-edit', [
          'misi' => $misi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,Misi $misi)
    {
      $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'text' => 'required',
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
             $misi->update($input);
             return redirect()->route('misi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
