<?php

namespace App\Http\Controllers;

use App\Rules\EmailRule;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Newsletter;

class NewsLetterController extends Controller
{
    public function validator(array $data)
    {
        return validator::make($data, [
            'email'=>['required',
                        'string', 
                        'email', 
                        'max:255', 
                        'unique:users', 
                        new EmailRule()]

        ]);
    }

    public function store(Request $request)
    {
    
        $rules = [
            'email'=>'required|string|email|max:255|unique:users'
        ];
        $validator = Validator::make($request->all(),$rules);
        
        if($validator->fails()){
           
            return back()->withErrors($validator) ->withInput();
        }

        $email = request('email');
        
        if($email){
            NewsLetter::subscribe($email);
            Session::flash('subscribe', 'successfully subscribed.');  
            return redirect()->back()->with('success', 'Vous êtes bien inscrit ');  
        }else{
            return redirect()->back();
        }
           
    }
    
}
