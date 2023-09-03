<!doctype html>
<html lang="en-US">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>TechSynergys</title>
    <meta name="description" content="TechSynergys">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        a:hover {text-decoration: underline !important;}
        @font-face {'Cairo'}
        body {font-family: Cairo; }
    </style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
<!--100% body table-->
<table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
       style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
    <tr>
        <td>
            <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                   align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="height:40px;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="height:20px;">&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                               style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                            <tr>
                                <td style="height:40px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="padding:0 15px;">
                                    <img alt="logo" title="Logo" style="max-width: 70px" src="{{asset('assets/front/img/email.png')}}">
                                    <br>
                                    <br>
                                    <span style="font-weight:100;font-family: Cairo">{{$contact->name}} : </span>
                                    <strong style="font-family: Cairo"> الأسم </strong>


                                    @if(!empty($contact->email))
                                        <br>
                                    <span style="font-weight:100;font-family: Cairo">{{$contact->email}} :  </span>
                                    <strong style="font-family: Cairo"> البريد الألكترونى </strong>
                                    @endif

                                    @if(!empty($contact->country))
                                        <br>
                                    <span style="font-weight:100;font-family: Cairo">{{$contact->country}} :   </span>
                                    <strong style="font-family: Cairo"> البلد </strong>
                                    @endif

                                    @if(!empty($contact->city))
                                        <br>
                                    <span style="font-weight:100;font-family: Cairo">{{$contact->city}} :   </span>
                                    <strong style="font-family: Cairo"> المدينة </strong>
                                    @endif

                                    <br>
                                    <span style="font-weight:100;font-family: Cairo">{{$contact->subject}} :   </span>
                                    <strong style="font-family: Cairo"> موضوع الرسالة </strong>
                                    <br>
                                    <h5 style="font-weight:100;font-family: Cairo">{{$contact->created_at->format('d-m-Y | h:i A')}}</h5>
                                    <span
                                        style="display:inline-block; vertical-align:middle; margin:5px; border-bottom:1px solid #cecece; width:100px;"></span>
                                    <p style="color:#455056; font-size:15px;line-height:24px;margin:0;font-family: Cairo">{{$contact->message}}</p>
                                    <a target="_blank" href="https://wa.me/{{$contact->whats}}" style="background:#25D366;text-decoration:none !important; font-weight:500; margin-top:20px; color:#fff;font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;font-family: Cairo">
                                        <i class="fa fa-whatsapp"></i> تواصل عبر الواتساب
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="height:40px;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                <tr>
                    <td style="height:10px;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <p style="font-weight: 100;font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;font-family: Cairo">&copy; <strong>شكراً لك</strong></p>
                    </td>
                </tr>
                <tr>
                    <td style="height:40px;">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--/100% body table-->
</body>

</html>

