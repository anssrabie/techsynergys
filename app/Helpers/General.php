<?php
function getDefaultLang(){
    return \Illuminate\Support\Facades\Config::get('app.locale');
}



function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


function sendLeadEmail(){
    $from   = "info@tech-synergys.com";
    $to_arr = [
        "rabidev2020@gmail.com",
        "anss.clash@gmail.com",
    ];
    $subject= 'Conatct us Message';
    $message = "Please Check Your Dashboard , There is One Contact ith You";
    $headers= "From: ".$from;
    foreach($to_arr as $to)
    {
        mail($to,$subject,$message,$headers);
    }
    echo true;
}

