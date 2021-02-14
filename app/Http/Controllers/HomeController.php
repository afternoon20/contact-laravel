<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class HomeController extends Controller
{
    /**
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {        
        $subject = array(
          'ご意見',
          'ご感想',
          'その他'
        );
        return view('/home',compact('subject'));
      
    }

    public function back(ContactRequest $request)
    {      
        $form = $request->all();
        $subject = array(
          'ご意見',
          'ご感想',
          'その他'
        );
        return view('/home',compact('subject','form'));
      
    }
}
