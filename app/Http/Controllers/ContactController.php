<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use App\Mail\TestMail;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create')->withTitle('Contact Us');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactRequest $request)
    {
        Contact::create($request->all());
        
        $users=User::all();
        $from_email=$users->find($request->from_user_id)->email;
        $from_name=$users->find($request->from_user_id)->name;
        $to_email=$users->find($request->from_user_id)->email;
        $to_name=$users->find($request->from_user_id)->name;

        \Mail::to($to_email)
        ->send(new TestMail($from_name,$from_email,$to_name,$to_email,$request->message,$request->subject));
        return view('home')->with('alert','your message sent ! :)')->withTitle('home');
        

        
        //  Send mail to admin
        //dd($to_email);
        /* \Mail::send('contact.contactmail', 
            array(
                'name' => $from_name,
                'email' => $from_email,
                'subject' => $request->get('subject'),
                'message' => $request->get('message'),
            ), 
            function($message) use ($request){
                $message->from('user@example.com');
                $message->to('yegnahe@example.com','Admin')->subject($request->get('subject'));
        });
 */

        return redirect('home')->with('alert', 'IT WORKS!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactRequest  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
