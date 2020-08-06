<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Newsletter;
 
class NewsLetterController extends Controller
{
 
public function create()
{

    return view('mesvues.index');
}

public function store(Request $request)
{
    if ( ! Newsletter::isSubscribed($request->email) ) {
        Newsletter::subscribePending($request->email);
        return redirect('/')->with('success','merci pour votre inscription');
    }
    return redirect('/')->with('failure','desole vous etes deja inscription');
}

}
