
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Fixed top navbar example for Bootstrap</title>

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" type="text/css" href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Custom styles for this template -->
    @if (Request::segment(1) == 'admin')
      {{-- expr --}}
    <link href="{{ url('css/navbar-top-fixed.css') }}" rel="stylesheet">      

    @endif

    <link rel="stylesheet" type="text/css" href="{{ url('css/starter-template.css') }}">

  </head>

  <body>