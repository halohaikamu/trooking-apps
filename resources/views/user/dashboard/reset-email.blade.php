<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://kit.fontawesome.com/6adea09fab.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <table role="presentation"
        style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation"
                    style="width:600px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                    <tr style="border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;">
                        <td align="left" style="padding:10px 25px;background:#fff; display: flex; align-items: center;">
                             <span style="font-weight: bold; padding-top: 10px;"> Trooking App </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:36px 30px 42px 30px;">
                            <table role="presentation"
                                style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                <tr>
                                    <td style="padding:0 0 36px 0;color:#153643;">
                                        <p style="font-weight:bold;margin:0 0 20px 0;font-family:Arial,sans-serif;">
                                            Hello {{ $user ? $user['name'] : '' }},</h1>
                                        <p
                                            style="margin:0 0 12px 0;font-size:14px;line-height:24px;font-family:Arial,sans-serif;">
                                            We've received a request to reset the email.
                                            </p>
                                        <p
                                            style="margin:10px 0 12px 0;font-size:14px;line-height:24px;font-family:Arial,sans-serif;">
                                            You can reset your email by clicking the button below:
                                        </p>

                                        <p style="text-align: center;">
                                            <a href="{{'http://localhost:8000/forgot-email/'.$user['token']}}" class="btn">Reset your email</a>
                                        </p>


                                        <p style="margin:100px 0 12px 0;font-size:14px;font-family:Arial,sans-serif;">
                                            Thank
                                            you, </p>
                                        <p style="margin:0 0 12px 0;font-size:14px;font-family:Arial,sans-serif;">
                                            Trooking App </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
        </div>
    </div>
</body>
</html>