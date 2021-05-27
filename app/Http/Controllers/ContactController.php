<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function store()
    {    
        $data = request()->validate([
            'name' => 'required',
            'email'=> 'required|email',
            'subject'=> 'required',
            'message'=> 'required', 
        ]);

        Mail::to('contact@gubgroup.com')->send(new ContactMail($data));

        return redirect()->back()->with('success', 'Merci pour votre message');  
         //Envoi du mail

        
    }
    
    public function index()
    {
         return view('frontend.index');
    }

    public function contact()
    {
        return view('contacts.contact');
    }

    public function about()
    {
        return view('abouts.about');
    }

    public function service()
    {
        return view('services.service');
    }

    public function transfer()
    {
        return view('services.transfer');
    }

    public function wallet()
    {
        return view('services.wallet');
    }

    public function pay()
    {
        return view('services.pay');
    }

    public function shop()
    {
        return view('services.shop');
    }

    public function express()
    {
        return view('services.express');
    }

    public function transfert()
    {
        return view('faq.transfert');
    }

    public function wallets()
    {
        return view('faq.wallets');
    }

    public function paye()
    {
        return view('faq.paye');
    }

    public function shops()
    {
        return view('faq.shops');
    }

    public function expressfaq()
    {
        return view('faq.expressfaq');
    }
}

