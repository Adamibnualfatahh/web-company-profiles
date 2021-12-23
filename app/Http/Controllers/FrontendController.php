<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\card;
use App\Models\Home;
use App\Models\misi;
use App\Models\User;
use App\Models\about;
use App\Models\gallery;
use App\Models\customer;
use App\Models\portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        $misi = misi::all();
        $gallery = gallery::all();
        $home = Home::all();
        $portfolio = portfolio::all();
        $user = User::all();
        $customer = customer::all();
        $about = about::all();
        $card = card::all();
        return view ('frontend.home',[
            'blog' => $blog,
            'misi' => $misi,
            'gallery' => $gallery,
            'home' => $home,
            'portfolio' => $portfolio,
            'user' => $user,
            'customer' => $customer,
            'about' => $about,
            'card' => $card
        ]);
    }

    // public function index_footer()
    // {
    //     $home = Home::all();
    //     $about = about::all();

    //     return view('layouts.frontend',[
    //         'about' => $about,
    //         'home' => $home,
    //     ]);
    // }

    // public function footer()
    // {
    //     $blog = Blog::all();
    //     $misi = misi::all();
    //     $gallery = gallery::all();
    //     $home = Home::all();
    //     $portfolio = portfolio::all();
    //     $user = User::all();
    //     return view('includes.footer',[
    //         'blog' => $blog,
    //         'misi' => $misi,
    //         'gallery' => $gallery,
    //         'home' => $home,
    //         'portfolio' => $portfolio,
    //         'user' => $user
    //     ]);
    // }

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
