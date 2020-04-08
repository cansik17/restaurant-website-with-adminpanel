<?php

namespace App\Http\Controllers\Back;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts= About::orderBy('id','ASC')->get();

        return view('back.aboutindex', compact('abouts'));
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
        $abouts= About::findOrFail($id);
        // dd($sliders);
        // die();
        return view ('back.aboutedit', compact('abouts'));
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
        $request->validate([
            
            'image'=>'image|mimes:jpeg,png,jpg|max:2048'
          ]);
    
          $about= About::findOrFail($id);
          $about->title=$request->title;
          $about->one=$request->one;
          $about->two=$request->two;
          $about->three=$request->three;
          $about->four=$request->four;
          $about->another=$request->another;
         
    
          if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('front\images'), $filename);
            $about->image = 'front/images/'.$filename;
        }
          $about->save();
         // toastr()->success( 'The operation completed successfully');
          return redirect()->route('dashboard.about.index');
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
