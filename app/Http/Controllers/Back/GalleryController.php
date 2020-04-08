<?php

namespace App\Http\Controllers\Back;

use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries=Gallery::orderBy('id', 'DESC')->get();
        //dd($sliders);

        return view ('back.galleries', compact('galleries'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galleries=Gallery::orderBy('id', 'ASC')->get();
        //dd($sliders);

        return view ('back.galleriescreate', compact('galleries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048'

          ]);


          $gallery = new Gallery;

          if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('front\images'), $filename);
            $gallery->image = 'front/images/'.$filename;
        }
          $gallery->save();
       
       // toastr()->success( 'The operation completed successfully');
          return redirect()->route('dashboard.gallery.index');
    }

    
    public function destroy($id)
    {
        $galleries=Gallery::find($id);
        $galleries->delete();
     
       // toastr()->success( 'The operation completed successfully');
        return redirect()->route('dashboard.gallery.index');
    }
}
