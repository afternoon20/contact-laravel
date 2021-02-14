@extends('layout.app')
@section('text','入力内容を確認し、「送信する」ボタンを押してください。')
@section('content')
<?php
// var_dump($form);
// exit();
?>
          <div class="contact-form bg-light shadow">
            <!-- 件名 -->
            <div class="contact-form__item contact-form__item--bb">
              <h3 class="contact-form__ttl">件名</h3>
              <div class="row">
                <div class="col-12">
                  <p class="contact-form__txt">{{$form['subject']}}</p>
                </div>
              </div>
            </div>
            <!-- 名前 -->
            <div class="contact-form__item contact-form__item--bb">
              <h3 class="contact-form__ttl">名前</h3>
              <div class="row">
                <div class="col-12">
                  <p class="contact-form__txt">{{$form['name']}}</p>
                </div>
              </div>
            </div>
            <!-- メールアドレス -->
            <div class="contact-form__item contact-form__item--bb">
              <h3 class="contact-form__ttl">メールアドレス</h3>
              <div class="row">
                <div class="col-12">
                  <p class="contact-form__txt">{{$form['email']}}</p>
                </div>
              </div>
            </div>
            <!-- 電話番号 -->
            <div class="contact-form__item contact-form__item--bb">
              <h3 class="contact-form__ttl">電話番号</h3>
              <div class="row">
                <div class="col-12">
                  <p class="contact-form__txt">{{$form['tel']}}</p>
                </div>
              </div>
            </div>
            <!-- お問い合わせ内容 -->
            <div class="contact-form__item contact-form__item--bb">
              <h3 class="contact-form__ttl">お問い合わせ内容</h3>
              <div class="row">
                <div class="col-12">
                  <p class="contact-form__txt">{!! nl2br(e($form['contents'])) !!}</p>
                </div>
              </div>
            </div>  
            <!-- ボタン一覧 -->
            <div class="row mt-5">
              <div class="col-12 col-lg-6">
                <form action="/" method="POST">
                  @csrf
                  <input type="hidden" name="subject" value={{$form['subject']}} >
                  <input type="hidden" name="name" value={{$form['name']}} >
                  <input type="hidden" name="email" value={{$form['email']}} >
                  <input type="hidden" name="tel" value={{$form['tel']}} >
                  <input type="hidden" name="contents" value="{{$form['contents']}}" >
                  <button id="back" class="mt-3 btn btn-secondary btn-lg btn-block" type="submit">修正する</button>
                </form>
              </div>
              <div class="ol-12 col-lg-6">
                <form action="/register" method="POST">
                  @csrf
                  <input type="hidden" name="subject" value={{$form['subject']}} >
                  <input type="hidden" name="name" value={{$form['name']}} >
                  <input type="hidden" name="email" value={{$form['email']}} >
                  <input type="hidden" name="tel" value={{$form['tel']}} >
                  <input type="hidden" name="contents" value="{{$form['contents']}}" >
                  <button id="send" class="mt-3 btn btn-info btn-lg btn-block" type="submit" name="submit_flag" value="2">送信する</button>
                  <button id="sending" class="mt-3 btn btn-primary btn-lg btn-block" style="cursor: wait;" type="submit" name="submit_flag" value="2" disabled >送信中...</button>
                </form>
                 </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection