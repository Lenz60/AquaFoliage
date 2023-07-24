<!DOCTYPE html>
<html data-theme="foliage">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="ubRt4jwLGAuv1MKmVynMyqosbcayoyMC4Gd88Epo">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @routes
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>