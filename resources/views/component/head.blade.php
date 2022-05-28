  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      {{ Request::is('login') ? 'Login' : '' }}
      {{ Request::is('register') ? 'Register' : '' }}
      {{ Request::is('forgotpass') ? 'Forgot Password' : '' }}
      {{ Request::is('emailver') ? 'Email Verification' : '' }}
    </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;900&display=swap"
      rel="stylesheet"
    />
  </head>