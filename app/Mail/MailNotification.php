<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($form,$send_type)
    {
        // 引数で受け取ったデータを変数にセット
        $this->form = $form;
        $this->send_type = $send_type;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        if($this->send_type === '1'){
            return $this->subject('お問い合わせいただきありがとうございます。')
                    ->view('mails.mail')
                    ->with(['form' => $this->form,'text' => '下記の内容で受け付けました。']);
        } else {
            return $this->subject('【管理者】お問い合わせがありました。')
                    ->view('mails.mail')
                    ->with(['form' => $this->form,'text' => '下記の内容でお問い合わせがありました。']);
        }


        
    }
}
