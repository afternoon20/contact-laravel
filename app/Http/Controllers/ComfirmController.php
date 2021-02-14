<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ComfirmController extends Controller
{
    public function index(ContactRequest $request){
    
    // フォームからのリクエストデータ全てを$formに代入
    $form = $request->all();
    // var_dump($form);
    // exit();
    return view('/comfirm',['form' => $form]);

    }
}
