@extends('layout.app')
@section('text','送信を完了しました。お問い合わせいただきありがとうございました。')
@section('content')
<?php
// var_dump($form);
// exit();
?>
          <div class="contact-form needs-validation bg-light shadow" action="/send" method="post" novalidate>
            <!-- 件名 -->
            <div class="contact-form__item contact-form__item--bb">
              <h3 class="contact-form__ttl">件名</h3>
              <div class="row">
                <div class="col-12">
                  <p>{{$form['subject']}}</p>
                </div>
              </div>
            </div>
            <!-- 名前 -->
            <div class="contact-form__item contact-form__item--bb">
              <h3 class="contact-form__ttl">名前</h3>
              <div class="row">
                <div class="col-12">
                  <p>{{$form['name']}}</p>
                </div>
              </div>
            </div>
            <!-- メールアドレス -->
            <div class="contact-form__item contact-form__item--bb">
              <h3 class="contact-form__ttl">メールアドレス</h3>
              <div class="row">
                <div class="col-12">
                  <p>{{$form['email']}}</p>
                </div>
              </div>
            </div>
            <!-- 電話番号 -->
            <div class="contact-form__item contact-form__item--bb">
              <h3 class="contact-form__ttl">電話番号</h3>
              <div class="row">
                <div class="col-12">
                  <p>{{$form['tel']}}</p>
                </div>
              </div>
            </div>
            <!-- お問い合わせ内容 -->
            <div class="contact-form__item contact-form__item--bb">
              <h3 class="contact-form__ttl">お問い合わせ内容</h3>
              <div class="row">
                <div class="col-12">
                  <p>{{$form['contents']}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection