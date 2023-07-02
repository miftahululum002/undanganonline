<!DOCTYPE html>
<html Content-Language="ID" lang="id" xml:lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Undangan digital berupa website untuk pernikahanmu. Lebih praktis, keren dan kekinian.">
    <meta name="author" content="MC Project">
    <link href="{{asset('img')}}/favicon.png" rel="icon">
    <title>LOGIN</title>
    <link href="{{asset('vendor')}}/fontawesome-free/css/all.min.css?SIDOINIKAHV2" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor')}}/bootstrap/css/bootstrap.css?SIDOINIKAHV2" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor')}}/ruangadmin/css/ruang-admin.css?SIDOINIKAHV2" rel="stylesheet">
    @yield('style')
</head>

<body class="bg-gradient-login">
    @yield('content')
    <script src="{{asset('vendor')}}/jquery/jquery.min.js">
    </script>
    <script src="{{asset('vendor')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('vendor')}}/jquery-easing/jquery.easing.min.js"></script>
    <script src="{{asset('vendor')}}/ruangadmin/js/ruang-admin.min.js"></script>
</body>
<script>
    setTimeout("$('#ikierror').hide();", 2000);
</script>
@yield('script')

</html>