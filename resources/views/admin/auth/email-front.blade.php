<!doctype html>
<html lang="ar">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>أستعادة كلمة المرور</title>
    <meta name="description" content="أستعادة كلمة المرور">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

    <style type="text/css">
        a:hover {text-decoration: underline !important;}
        @font-face {'Cairo'}
        body {font-family: Cairo; }

        @font-face {
            font-family: "OratorStd";
            src: url("{{asset('assets/front/webfonts/OratorStd.otf')}}");
        }
        .logo {font-family: 'OratorStd' !important;}

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
                    <td style="height:80px;">&nbsp;</td>
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
                                    <a class="logo" href="{{route('front.home')}}" target="_blank" style="color:#5fcf80;
                                    font-weight:400; margin:0;font-size:30px;letter-spacing: 1px;font-family: 'OratorStd';">
                                        GRANDCONTOURS.DE
                                    </a>

                                    <h3 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family: Cairo;">لقد طلبت إعادة تعيين كلمة المرور الخاصة بك</h3>
                                    <span
                                        style="display:inline-block; vertical-align:middle; margin:10px 0 8px; border-bottom:1px solid #cecece; width:100px;"></span>
                                    <p style="color:#455056; font-size:15px;line-height:24px;margin:0;font-family: Cairo">لا يمكننا ببساطة أن نرسل لك كلمة المرور القديمة. تم إنشاء رابط فريد لإعادة تعيين كلمة المرور الخاصة بك. لإعادة تعيين كلمة المرور الخاصة بك ، انقر فوق الارتباط التالي واتبع التعليمات.</p>
                                    <a href="{{route('change.password', $token)}}"
                                       style="background:#5fcf80;text-decoration:none !important;
                                           font-weight:500; margin-top:35px;
                                           color:#fff;
                                           font-size:14px;padding:10px 24px;
                                           display:inline-block;border-radius:50px;font-family: Cairo">إعادة تعيين كلمة المرور</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="height:40px;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                <tr>
                    <td style="height:20px;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353);
                         line-height:18px; margin:0 0 0;font-family: 'Cairo'">&copy; <strong>شكرا لك</strong></p>
                    </td>
                </tr>
                <tr>
                    <td style="height:80px;">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--/100% body table-->
</body>

</html>

