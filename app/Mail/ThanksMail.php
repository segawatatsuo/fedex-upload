<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ThanksMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $content;


    public function __construct($content)
    {
        $this->content = $content;
        //このようにインスタンスに設定すれば、例えば以下のようにしてビューで値を取得することができます。
        //{{ $content['name'] }}
    }


    public function build()
    {
        return $this->from('export@ccmedico.com')
        ->subject('C.C.Medico Thank you for your order.')
        //->view('HTMLメール内容となるビューを指定')
        ->text('emails.complete');//テキストメールのビューを指定
        //->with('ビューへ渡すパラメータ')
        //->attach('添付ファイル');
    }
}
