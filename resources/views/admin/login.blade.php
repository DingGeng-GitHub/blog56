<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" type="application/javascript"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-12" style="height: 20%">.col-md-12</div>
        <div class="col-md-1" style="height: 80%">
            <!--手机导航栏-->
            <div id="mobile-menu" class="mobile-nav visible-xs visible-sm">
                <ul>
                    <li><a href="#">首页</a></li>
                    <li><a href="#">Java</a></li>
                    <li><a href="#">SVN</a></li>
                    <li><a href="#">iOS</a></li>
                </ul>
            </div>
            <!--pc导航栏-->
            <nav class="navbar-inverse visible-lg visible-md" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">菜鸟教程</a>
                    </div>
                    <div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">iOS</a></li>
                            <li><a href="#">SVN</a></li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Java</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            {{--<!--手机导航栏侧滑-->
            <div class="nav-btn visible-xs visible-sm">
                <a href="#" class="mobile-nav-taggle" id="mobile-nav-taggle">
                    <span class="glyphicon glyphicon-align-justify"></span>
                </a>
            </div>--}}
        </div>
        <div class="col-md-11">.col-md-11</div>
    </div>
</body>
</html>