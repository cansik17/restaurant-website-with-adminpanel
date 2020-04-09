<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.contact');
    }

    public function mail(Request $request)
    {
        $request->validate([
            
            'name'=>'required|min:3',
            'email'=>'required|email',
            'message'=>'required|min:10'

          ]);
       

        //   if($validate->fails()){
        //     return redirect()->route('contact')->withErrors($validate)->withInput();
        //   }
        
    
         
    
          Mail::send([],[], function($message) use($request){
            $message->from('info@yamifood.com','YamiFood');
            $message->to('blegojcan@gmail.com');
            $message->setBody(' Mesajı Gönderen :'.$request->name.'<br />
                        Mesajı Gönderen Mail :'.$request->email.'<br />
                        Mesaj :'.$request->message.'<br /><br />
                        Mesaj Gönderilme Tarihi : '.now().'','text/html');
            $message->subject($request->name. ' iletişimden mesaj gönderdi!');
          });
    
          // $contact = new Contact;
          // $contact->name=$request->name;
          // $contact->email=$request->email;
          // $contact->topic=$request->topic;
          // $contact->message=$request->message;
          // $contact->save();
          //toastr()->success('Great!', 'Thank you! Your message has been successfully sent. ... ');
          return redirect()->route('contact')->with('success', 'Mail send successfully!');
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
