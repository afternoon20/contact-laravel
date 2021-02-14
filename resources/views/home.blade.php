@extends('layout.app')
@section('text','下記フォームをご記入の上、「確認する」ボタンを押してください。')
@section('content')
@if ($errors->any())
  <div class="mt-3 error-massage border border-danger p-4">
    <h3 class="text-danger contact__ttl">入力に不備があります。</h3>
    @foreach ($errors->all() as $error)
      <p class="text-danger contact__txt">・{{$error}}<p>
    @endforeach
  </div>
@endif
<form class="contact-form bg-light shadow" action="{{ url('/comfirm') }}" method="post">
  @csrf
            <!-- 件名 -->
            <div class="contact-form__item">
              <h3 class="contact-form__ttl">件名<span class="danger text-danger">※</span></h3>
              <div class="row">
                <div class="col-12 col-lg-4">
                  <select class="custom-select contact-form__select
                  @error('subject')
                  border border-danger
                  @enderror
                  " name="subject" >
                    <option value="">選択してください</option>
                      @isset($form['subject'])
                        @foreach($subject as $value)
                          @if($value === $form['subject'])
                            <option value={{$value}} selected>{{$value}}</option>
                          @else
                          <option value={{$value}}>{{$value}}</option>
                          @endif
                        @endforeach
                      @else
                        @foreach($subject as $value)
                          <option value={{$value}} @if(old('subject')==$value) selected  @endif>{{$value}}</option>
                        @endforeach
                      @endif
                  </select>
                </div>
              </div>
            </div>
            <!-- 名前 -->
            <div class="contact-form__item">
              <h3 class="contact-form__ttl">名前<span class="danger text-danger">※</span></h3>
              <div class="row">
                <div class="col-12">
                  <input type="text" class="form-control 
                  @error('name')
                  border border-danger
                  @enderror
                  " name="name" value=
                  @isset($form['name'])
                    "{{$form['name']}}"
                  @else
                  "{{old('name')}}"
                  @endif
                  maxlength="50">                
                </div>
              </div>
            </div>
            <!-- メールアドレス -->
            <div class="contact-form__item">
              <h3 class="contact-form__ttl">メールアドレス<span class="danger text-danger">※</span></h3>
              <div class="row">
                <div class="col-12">
                  <input type="email" class="form-control
                  @error('email')
                  border border-danger
                  @enderror
                  " name="email" value=
                  @isset($form['email'])
                    "{{$form['email']}}"
                  @else
                  "{{old('email')}}"
                  @endif
                  >
                </div>
              </div>
            </div>
            <!-- 電話番号 -->
            <div class="contact-form__item">
              <h3 class="contact-form__ttl">電話番号(ハイフンなし)<span class="danger text-danger">※</span></h3>
              <div class="row">
                <div class="col-12">
                  <input type="tel" class="form-control
                  @error('tel')
                  border border-danger
                  @enderror
                  " name="tel" value=
                   @isset($form['tel'])
                    "{{$form['tel']}}"
                  @else
                  "{{old('tel')}}"
                  @endif
                  >
                </div>
              </div>
            </div>
            <!-- お問い合わせ内容 -->
            <div class="contact-form__item">
              <h3 class="contact-form__ttl">お問い合わせ内容<span class="danger text-danger">※</span></h3>
              <div class="form-group">
                <textarea class="form-control contact-form__textarea
                @error('contents')
                  border border-danger
                  @enderror
                " name="contents" rows="8"  maxlength="255">@isset($form['contents']){{$form['contents']}}@else{{old('contents')}}@endif</textarea>
              </div>
            </div>
            <button id="send--top" class="mt-5 btn btn-info btn-lg btn-block" type="submit">確認する</button>
          </form>

@endsection