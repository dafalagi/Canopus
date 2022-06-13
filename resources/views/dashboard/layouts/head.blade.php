<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Canopus Dashboard">
    <meta name="author" content="Canopus">
    <title>
      {{ Request::is('dashboard') ? 'Canopus | Dashboard' : '' }}
      {{ Request::is('dashboard/users*') ? 'Canopus | Users' : '' }}
      {{ Request::is('dashboard/contents*') ? 'Canopus | Contents' : '' }}
      {{ Request::is('dashboard/discusses*') ? 'Canopus | Discusses' : '' }}
      {{ Request::is('dashboard/favorites*') ? 'Canopus | Favorites' : '' }}
      {{ Request::is('dashboard/comments*') ? 'Canopus | Comments' : '' }}
      {{ Request::is('dashboard/reports*') ? 'Canopus | Reports' : '' }} 
    </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">

    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    <style>
      trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
      }
    </style>
  </head>