<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Artisan</title>
  <link rel="stylesheet" type="text/css" href="/packages/masterfix/artisan-web/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/packages/masterfix/artisan-web/css/master.css">
  <style type="text/css">
    body {
      margin: 20px;
    }
    @yield('style')
  </style>
</head>
<body>
@yield('content')
<script src="/packages/masterfix/artisan-web/js/jquery-2.0.2.min.js"></script>
<script src="/packages/masterfix/artisan-web/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
@yield('script')
});
</script>
</body>
</html>
