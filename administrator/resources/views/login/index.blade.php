<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>E-Lelang | Login</title>

    <link href="{{\Illuminate\Support\Facades\Config::get('assets.assets')}}template/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{\Illuminate\Support\Facades\Config::get('assets.assets')}}template/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{\Illuminate\Support\Facades\Config::get('assets.assets')}}template/css/animate.css" rel="stylesheet">
    <link href="{{\Illuminate\Support\Facades\Config::get('assets.assets')}}template/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{\Illuminate\Support\Facades\Config::get('assets.assets')}}corelib/ajax.css">
    <style>
        body {
            background: url({{\Illuminate\Support\Facades\Config::get('assets.assets')}}img/bg4.jpg);
            color: #FFF;
        }

        form {
            color: #333;
        }
    </style>

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>


        <i class="fa fa-users" style="font-size: 220px"></i>
        <h3>E-Lelang Login</h3>

        <div id="results"></div>

        <form class="m-t" action="" onsubmit="return false" id="form-konten">
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required="">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

        </form>
        <p class="m-t"> <small>Aplikasi Lelang Elektronik 	&copy; 2018</small> </p>
    </div>
</div>

<!-- Mainly scripts -->
<input type='hidden' name='_token' value='{{ csrf_token() }}'>
<script src="{{\Illuminate\Support\Facades\Config::get('assets.assets')}}template/js/jquery-2.1.1.js"></script>
<script src="{{\Illuminate\Support\Facades\Config::get('assets.assets')}}template/js/bootstrap.min.js"></script>
<script src="{{\Illuminate\Support\Facades\Config::get('assets.assets')}}corelib/core.js"></script>

<script type="text/javascript">
    $('#form-konten').submit(function () {
        var data = getFormData('form-konten');
        ajaxTransfer("{{url('/validate-login')}}", data, '#results');
    });

    function redirectPage(){
        redirect(1000, '/');
    }
</script>

</body>

</html>
