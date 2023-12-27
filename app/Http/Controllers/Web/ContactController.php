<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $reason_ar = Contact::$reason_ar;
        $reason_en = Contact::$reason_en;
        return view('web.contact_us', compact('reason_ar', 'reason_en'));
    }

    public function store(ContactRequest $request)
    {
        Contact::create($request->validated());
        return back()->with('success', 'contact sent successfully');
    }
}
