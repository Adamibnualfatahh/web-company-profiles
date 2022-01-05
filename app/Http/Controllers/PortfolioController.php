<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\about;
use App\Models\portfolio;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreportfolioRequest;
use App\Http\Requests\UpdateportfolioRequest;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = DB::table('portfolios') -> get();
        return view('dashboard.portfolio', ['portfolio' => $portfolio]);
    }
    public function index_fr()
    {   $about = about::all();
        $home = Home::all();
        $portfolio = DB::table('portfolios') -> get();
        return view('frontend.portfolio', ['portfolio' => $portfolio,'about' => $about,'home' => $home]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('dashboard.portfolio-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreportfolioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreportfolioRequest $request)
    {
         $request->validate([
            'name' => 'required',
            'title' => 'required',
            'created_at' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Portfolio::create($input);
     
        return redirect('/dashboard/portfolio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(portfolio $portfolio,$id)
    {
       $portfolio = Portfolio::findOrFail($id);
        return view('dashboard.portfolio-edit', [
          'portfolio' => $portfolio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateportfolioRequest  $request
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateportfolioRequest $request, portfolio $portfolio)
    {
        $request->validate([
            
            'title' => 'required',
            'name' => 'required',
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
             $portfolio->update($input);
             return redirect()->route('portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(portfolio $portfolio,$id)
    {
        DB::table('portfolios')->where('id', $id)->delete();
        return redirect('/dashboard/portfolio');
    }
}
