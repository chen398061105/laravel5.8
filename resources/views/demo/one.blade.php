<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url('form')}}" method="post">
    @csrf
{{--    全体验证信息--}}
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

{{--    只验证你想要的那个项 --}}
{{--    @error('username')--}}
{{--    <div>{{ $message }}</div>--}}
{{--    @enderror--}}
    用户名：<input type="text" name="username" id="" value="{{old('username')}}"><br>
    密 码：<input type="text" name="pwd" id=""><br>
    <button type="submit">提交</button>
</form>
</body>
</html>