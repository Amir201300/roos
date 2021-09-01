<?php


use Illuminate\Support\Facades\App;

function send_email_with_code($user, $type, $transKey)
{
    $lang=$user->lang();
    App::setLocale($lang);
    $subject=__('email.'.$transKey);
    $email=$user->email;
    $data=[];
    $data['code']=1;
    $data['language']=$lang;
    $name=$user->name;

    Mail::send('emails.send_email_with_code', $data, function ($mail) use ($email,$name, $subject) {
        $mail->to($email, $name);
        $mail->subject($subject);
    });

    return 1;
}
