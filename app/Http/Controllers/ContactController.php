<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index () {
       

        $formdata=Contact::all();
       
        
        return view('contacts.index',['contacts' =>  $formdata]); }
    public function show ($contactid) {

        $singleContact = Contact::find($contactid);
        if(is_null($singleContact)){
            return to_route('contacts.index');
        }


        return view('contacts.show',['contact' => $singleContact]);
    }
    public function create() {

     

       
        return view('contacts.create') ; 
    }
    public function store(){
       
       request()->validate([
            'name' => ['required' ], 
             'email'=> ['required' ] ,
              'phone'=> ['required' ],
              'message'=> ['required' ] 
        ]);

        

        $contact = new Contact;
        $contact->name = request()->name;
        $contact->email= request()->email;
        $contact->phone = request()->phone;
        $contact->message= request()->message;
        $contact->save();
        

    


        return to_route('contacts.index');
    }
    public function edit(Contact $contact){

       
                
        return view('contacts.edit' , [ 'contact'=> $contact]);
    }
    public function update($contactid){

        $name = request()->name;
        $email = request()->email ;
        $phone = request()->phone ;
        $message = request()->message ; 

        $alldata = Contact::find($contactid);

        $alldata -> update([
            'name' => $name , 
            'email' => $email,
            'phone' => $phone,
            'message' => $message
        ]);



       
        


        return to_route('contacts.index' , $contactid);
    }
     
    public function destroy($contactid){

        $data =Contact::find($contactid) ; 
        $data->delete() ; 

        return to_route('contacts.index')->with('succes' , 'تم حذف الحدث بنجاح.');
    }
}
