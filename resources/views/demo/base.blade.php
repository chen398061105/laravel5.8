<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    全局共享一个变量，在\app\Providers\AppServiceProvider.php boot方法设置--}}
    <title>{{ $title }} --@yield('title','no title')</title>
</head>
<body>
@section('nav')
    <p>我是主模板的nav部分</p>
@show
@yield('main')
</body>
</html>