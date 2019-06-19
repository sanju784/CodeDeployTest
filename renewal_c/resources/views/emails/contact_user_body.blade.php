@php($dt = new DateTime("now", new DateTimeZone('Asia/Tokyo')))
この度はEPARK人間ドックにお問い合わせを頂き、誠にありがとうございます。
後日、担当者より改めましてご連絡致します。
いましばらくお待ち下さいますようお願い申し上げます。
    
    
【お客様情報】
---------------------------------------------------------
お名前： {{$contact->last_name}} {{$contact->first_name}}
メールアドレス： {{$contact->email}}

【お問い合わせの種類】
---------------------------------------------------------
{{$contact->getText($contact->contact_reason_opt)}}

【お問い合わせ内容】
---------------------------------------------------------
{{$contact->contact_reason_text}}


---------------------------------------------------------
受付日時： {{$dt->format('m/d/Y, H:i:s')}}
---------------------------------------------------------
人間ドックの総合ポータルサイト　EPARK人間ドック
http://www.docknet.jp/
    
運営：株式会社EPARK人間ドック
http://eparkdock.com/
---------------------------------------------------------

