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
</head>
<body style="background-image: url('{{URL::asset('static/images/portrait.jpg')}}'); background-repeat:no-repeat;">
    <div class="container-fluid">
        <div style="height: 300px; width: 400px; position:absolute; left: 0; right: 0; bottom: 0; top: 0; margin: auto; border: 1px solid #AEC0C1; border-radius: 10px;">
            <!-- 选项卡菜单-->
            <ul id="myTab" class="nav nav-tabs" role="tablist" >
                <li class="active"><a href="#bulletin" role="tab" data-toggle="tab">登录</a></li>
                <li><a href="#rule" role="tab" data-toggle="tab">注册</a></li>
            </ul>
            <!-- 选项卡面板 -->
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active" id="bulletin">
                    <form class="form-horizontal" style="margin-top: 20px">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">账号</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="手机号/邮箱">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 记住我
                                    </label>
                                    <label style="float: right; margin-right: 10%;">
                                        <input type="checkbox"> 忘记密码
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">登录</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane " id="rule">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">手机号/邮箱</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="手机号/邮箱">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">确认密码</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="确认密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">验证码</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="确认密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">注册</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
