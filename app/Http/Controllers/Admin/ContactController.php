<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{

    public function index()
    {
        $contactMessages = Contact::all();
        return view('admin.pages.contact.index', [
            'contactMessages' => $contactMessages
        ]);
    }

    public function store(Request $request)
    {
        $contact = new Contact();

        $contact->fullname = $request->input('fullname');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contactStore = $contact->save();

        if ($contactStore) {
            return Redirect::route('front.contact')->with('success', 'Mesajınız başarıyla iletilmiştir.');
        }
    }

    public function show(string $id)
    {
        $contactMessage = Contact::query()->find($id);

        return view('admin.pages.contact.show', [
            'contactMessage' => $contactMessage
        ]);
    }

    public function destroy(string $id)
    {
        $contact = Contact::query()->where('id', $id)->first();

        $contact->delete();

        session()->flash('success', 'İletişim bilgisi başarıyla silindi');

        return Redirect::route('contact.index');
    }
}
