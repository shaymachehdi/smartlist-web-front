<!doctype html>
<html lang="fr">
<head>

  <meta name="keywords" content="@yield('title')">
  <meta name="description" content="">
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{asset('css/minty.min.css')}}">

  @yield('styls')

</head>
<body>
  
  @include('partiels.navbar')

  @yield('slider')

  <div class="container">
  @yield('content')
  </div>
  <script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>

  @yield('scripts')

</body>

</script>

</html>