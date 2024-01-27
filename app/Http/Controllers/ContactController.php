<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function contact(){
        return 
        view('contact'); 
          }

    public function contact_mail_send(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|string|max:50',
            'email'=> 'required|email:rfc,dns',
            'subject' => 'required',
            'message' => 'required',
            ]);
        Contact::create($data);
        Mail::to( 'nohaadel@gmail.com')->send( 
            new ContactMail($data)
        );
        return redirect('ContactUs')->with('success', 'Send Email');
    }
    public function index()
    {
        $contact = Contact::get();
        return view('admin.contacts', compact('contact'));
    }
    public function show(string $id)
    {
       $contact= Contact::findOrFail($id);
       return view('admin.showcontact', compact('contact'));
    }
    public function destroy(string $id)
    {
        Contact::where('id', $id)->delete();
        return redirect('admin/contacts')->with('danger', 'Delete Data Success');
    }
    public function showMsg(string $id)
    {
       $user= Contact::findOrFail($id);
       $user->update(['read_at' => 1]);
       return view('emails.contactus', compact('user'));
    }
}
