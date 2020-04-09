<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Menu;
use Illuminate\Http\Request;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus=Menu::orderBy('id', 'DESC')->get();
        //dd($sliders);

        return view ('back.menuindex', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus=Menu::orderBy('id', 'ASC')->get();
        //dd($sliders);

        return view ('back.menucreate', compact('menus'));
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
            

            'kind'=>'required',
            'price'=>'required',
            'firstTitle'=>'required',
            'secondTitle'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048'

          ]);


          $menu = new Menu;
          $menu->kind=$request->kind;
          $menu->price=$request->price;
          $menu->firstTitle=$request->firstTitle;
          $menu->secondTitle=$request->secondTitle;

          if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('front\images'), $filename);
            $menu->image = 'front/images/'.$filename;
        }
          $menu->save();
       
         //toastr()->success( 'The operation completed successfully');
          return redirect()->route('dashboard.menu.index')->with('toast_success', 'The operation completed successfully!');
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
        
        $menus= Menu::findOrFail($id);
        // dd($sliders);
        // die();
        return view ('back.menuedit', compact('menus'));
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
            

            'kind'=>'required',
            'price'=>'required',
            'firstTitle'=>'required',
            'secondTitle'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048'

          ]);


          $menu = Menu::findOrFail($id);
          $menu->kind=$request->kind;
          $menu->price=$request->price;
          $menu->firstTitle=$request->firstTitle;
          $menu->secondTitle=$request->secondTitle;

          if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('front\images'), $filename);
            $menu->image = 'front/images/'.$filename;
        }
          $menu->save();
       
         //toastr()->success( 'The operation completed successfully');
          return redirect()->route('dashboard.menu.index')->with('toast_success', 'The operation completed successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menus=Menu::find($id);
        $menus->delete();
     
        //toastr()->success( 'The operation completed successfully');
        return redirect()->route('dashboard.menu.index')->with('toast_success', 'The operation completed successfully!');
    }
}
