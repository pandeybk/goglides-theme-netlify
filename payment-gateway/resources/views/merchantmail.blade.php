<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title>Women's Day</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap:100,300,400,700,900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Pinyon+Script&display=swap" rel="stylesheet" type="text/css">
    <style>
        html,body{
            font-family: 'Lato', sans-serif;
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #f1f1f1;
            font-weight: 400;
            line-height: 1.5;
        }
        strong{font-weight: 700;}
    </style>
</head>
<body>
<table style="width: 700px; margin:0 auto;background: #e8e7e7">
    <tbody>
    <tr>
        <td style="text-align: center; padding: 30px;">
            <a href="https://www.goglides.com/" target="_blank">
                <img src="{{ $companyLogo  }}" width="50%">
            </a>
        </td>
    </tr>
    </tbody>
</table>
<table style="width: 700px; margin:0 auto;background: #fff;text-align: center; padding: 30px">
    <tbody>
    <tr>
        <td>
            <h1>
                Transaction Notificaiton
            </h1>
            <h3>
                Transaction has been made. Details below
            </h3>
            <div>
                <p><strong>Customer Name :{{ $userName }}</strong></p>
                <p><strong>Customer Phone :{{ $userPhone }}</strong></p>
                <p><strong>Customer Email :{{ $userMail }}</strong></p>

                <p><strong>Product Name :{{ $product }}</strong></p>
                <p><strong>Quantity :{{ $quantity }}</strong></p>
                <p><strong>Amount :{{ $amount }}</strong></p>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<table style="width: 700px; margin:0 auto;background: #fff;text-align: center">
    <tbody>
    <tr>
        <td>
            <ul style="list-style: none;padding-bottom: 30px">
                <li>
                    <img src="https://cdn.pixabay.com/photo/2019/12/16/08/45/instagram-4698898_960_720.png" width="150px;">
                </li>
            </ul>
        </td>
    </tr>
    </tbody>
</table>
<table style="width: 700px; margin:0 auto; font-size: 8px; padding: 30px;">
    <tr>
        <td align="center">
            <p>You're receiving this email because you signed up for a Goglides account or signed up to receive marketing communications
                from Goglides.com. If you don't wish to receive these marketing emails you can
                <unsubscribe>Unsubscribe here</unsubscribe>
            </p>

            <webversion>View this email in your browser</webversion>
            <br />
            <p>Need help? Have feedback? Feel free to <a href="http://goglides.com/contact-us" target="_blank" style="color: #6ea4ad;">Contact Us</a></p>
            <p>324 inverness drive south,8302,englewood colorado,80112<br/>
                Email : <a href="mailto:info@goglides.com" style="color: #777;">info@goglides.com</a></p>
            <p>Copyright © 2017-2020 GoGlides. All rights reserved.</p>
        </td>
    </tr>
</table>
</body>
</html>
