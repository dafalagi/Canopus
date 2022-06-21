  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      {{ Request::is('/') ? 'Canopus' : '' }}
      {{ Request::is('login') ? 'Login' : '' }}
      {{ Request::is('register') ? 'Register' : '' }}
      {{ Request::is('forgotpass') ? 'Forgot Password' : '' }}
      {{ Request::is('emailver') ? 'Email Verification' : '' }}
      {{ Request::is('discusses*') ? 'Forum' : '' }}
      {{ Request::is('contents*') ? 'Samudera Angkasa' : '' }}
    </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
  </head>