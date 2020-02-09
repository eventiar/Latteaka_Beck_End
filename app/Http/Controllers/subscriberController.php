<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class subscriberController extends Controller
{
    //create
    public function createsubscriber(Request $request)
    {
        $subscriber = subscriber::create([
             'email'     => $request->email,
         ]);
        
        return $subscriber; 
    }

    //show
    public function showallsubscriber()
    {
        $subscriber = subscriber::all();
        return $subscriber;
    }
}
