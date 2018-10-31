<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('static/css/bootstrap.min.css')}}">
    <script src="{{asset('static/js/bootstrap.js')}}"></script>
    <script src="https://unpkg.com/vue"></script>
    {{--<img src="{{URL::asset('static/images/portrait.jpg')}}" />--}}
    <title>Document</title>
    <style>
       /* #web_bg{
            position:fixed;
            top: 0;
            left: 0;

            width:100%;
            height:100%;
            min-width: 10px;
            z-index:-10;       // 这个的目的是让整个div在HTML页面中各个层级的下方第一个创建的层级z-index的值是0，所以如果我们这里写成-1也可以实现，不过这里写-10是确保整个div在最下面
            zoom: 1;
            background-color: #fff;
            background-repeat: no-repeat;

            background-size: cover;       //
            -webkit-background-size: cover;
            -o-background-size: cover;

            background-position: center 0;   // 这句的意思就是图片的位置，居中，靠左对齐。
        }*/
       #body{
        background: url({{URL::asset('static/images/portrait1.jpg')}}) no-repeat center center fixed;
        background-size: 100% 100%;
        position:absolute;
        width:100%;
        height:100%;
       }
     </style>
</head>
<body id="body">
    <div class="container-fluid">
    </div>
</body>
</html>
