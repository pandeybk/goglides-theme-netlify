<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title>Email</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap:100,300,400,700,900" rel="stylesheet" type="text/css">
    <style>
        html,body{
            font-family: 'Lato', sans-serif;
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-weight: 400;
            line-height: 1.5;
        }
        strong{font-weight: 700;}
    </style>
</head>
<body>

<table style="width: 700px; margin:0 auto; background:#f9f9f9;">
    <tbody>
        <tr>
            <td style="padding: 30px;">
                <a href="https://www.goglides.com/" target="_blank">
                    <img src="{{ $companyLogo  }}" width="90px">
                </a>
            </td>
        </tr>
    </tbody>
</table>

<table style="width: 700px; margin:0 auto;background: #fff; padding: 30px">
    <tbody>
        <tr>
            <td>
                <h1>
                    Receipt
                </h1>
                <h3>
                    Here is the receipt of your purchase
                </h3>
                <div>
                    <p><strong>Product Name : </strong> {{ $product }}</p>
                    <p><strong>Quantity : </strong> {{ $quantity }}</p>
                    <p><strong>Amount : </strong> {{ $amount }}</p>
                </div>
                <h3>
                    For further information: {{ $merchantMail }}
                </h3>
            </td>
        </tr>
    </tbody>
</table>

<table style="width: 700px; margin:0 auto;background: #fff;text-align: center;border-top: 1px solid #FF9800;">
    <tbody>
        <tr>
            <td>
                <ul style="list-style: none;padding-bottom: 30px">
                    <li style="margin:5px;display:inline-block;">
                        <a href="#" target="_blank">Facebook</a>
                    </li>
                    <li style="margin:5px;display:inline-block;">
                        <a href="#" target="_blank">Twitter</a>
                    </li>
                    <li style="margin:5px;display:inline-block;">
                        <a href="#" target="_blank">Instagram</a>
                    </li>
                </ul>
            </td>
        </tr>
    </tbody>
</table>

<table style="width: 700px; margin:0 auto; font-size: 10px; padding: 30px;">
    <tr>
        <td align="center">
            <p>Need help? Have feedback? Feel free to <a href="#" target="_blank" style="color: #0b4095;">Contact Us</a></p>
            <p>ABC Street, Kathmandu, Nepal<br/>
                Email : <a href="mailto:info@abc.com" style="color: #777;">info@abc.com</a></p>
            <p>Copyright © 2020. All rights reserved.</p>
        </td>
    </tr>
</table>

</body>
</html>
