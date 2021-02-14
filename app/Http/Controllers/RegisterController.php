<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Form;
use Mail;
use App\Mail\MailNotification;
use App\Http\Requests\ContactRequest;

class RegisterController extends Controller
{
   public function index(ContactRequest $request){
    $form = $request->all();

    // データベース登録
    $data = Form::create([
            'subject' => $form['subject'],
            'name' => $form['name'],
            'email' => $form['email'],
            'tel' => $form['tel'],
            'contents' => $form['contents'],
    ]);
    $data->save();

    // ユーザに送信
    $send_type = '1';
    Mail::to($form['email'])
    ->send(new MailNotification($form,$send_type));

    // 管理者に送信
    $send_type = '0';
    Mail::to($form['email'])
    ->send(new MailNotification($form,$send_type));

    return view('/complete',['form' => $form]);

    }
    
    
}
