<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">

    <title>Altair Admin v1.0.0 - Login Page</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <!-- uikit -->
    <link rel="stylesheet" href="bower_components/uikit/css/uikit.almost-flat.min.css"/>

    <!-- altair admin login page -->
    <link rel="stylesheet" href="assets/css/login_page.min.css" />

</head>
<body class="login_page">
@include('admin.alert.success')
@include('admin.alert.error')
<div class="login_page_wrapper">
    <div class="md-card" id="login_card">
        <div class="md-card-content large-padding" id="login_form">
            <div class="login_heading">
                <img src="{{URL::to('assets/img/logo.jpg')}}" alt="">
                {{--<div class="user_avatar"></div>--}}
            </div>

            {!! Form::open(['route'=>'log.store', 'method'=>'POST']) !!}

                <div class="uk-form-row">
                    <label for="login_username">Usuario</label>
                    {!! Form::email('email',null,['class'=>'md-input']) !!}

                </div>
                <div class="uk-form-row">
                    <label for="login_username">Password</label>
                    {!! Form::password('password',['class'=>'md-input']) !!}
                    {{--<input class="md-input" type="password" id="login_username" name="login_username" />--}}
                </div>
                <div class="uk-margin-medium-top">

                    {!! Form::submit('Iniciar',['class'=>'md-btn md-btn-primary md-btn-block md-btn-large']) !!}
                    {{--<button class="md-btn md-btn-primary md-btn-block md-btn-large">Sign In</button>--}}
                </div>
                {{--<div class="uk-margin-top">--}}
                        {{--<span class="icheck-inline">--}}
                            {{--<input type="checkbox" name="login_page_stay_signed" id="login_page_stay_signed" data-md-icheck />--}}
                            {{--<label for="login_page_stay_signed" class="inline-label">Stay signed in</label>--}}
                        {{--</span>--}}
                {{--</div>--}}
            {!! Form::close() !!}
        </div>
        <div class="md-card-content large-padding uk-position-relative" id="login_help" style="display: none">
            <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top" id="login_help_close"></button>
            <h2 class="heading_b uk-text-success">Can't log in?</h2>
            <p>Here’s the info to get you back in to your account as quickly as possible.</p>
            <p>First, try the easiest thing: if you remember your password but it isn’t working, make sure that Caps Lock is turned off, and that your username is spelled correctly, and then try again.</p>
            <p>If your password still isn’t working, it’s time to <a href="#" id="login_password_reset_show">reset your password</a>.</p>
        </div>
        <div class="md-card-content large-padding" id="login_password_reset" style="display: none">
            <h2 class="heading_a uk-margin-large-bottom">Reset password</h2>
            <form action="">
                <div class="uk-form-row">
                    <label for="login_email_reset">Your email address</label>
                    <input class="md-input" type="text" id="login_email_reset" name="login_email_reset" />
                </div>
                <div class="uk-margin-medium-top">
                    <button class="md-btn md-btn-primary md-btn-block">Reset password</button>
                </div>
            </form>
        </div>
    </div>
    <div class="uk-margin-top">
        <a href="#" id="login_help_show">Need help?</a>
    </div>
</div>

<!-- common functions -->
<script src="assets/js/common.min.js"></script>
<!-- altair core functions -->
<script src="assets/js/altair_admin_common.min.js"></script>

<!-- altair login page functions -->
<script src="assets/js/pages/login_page.min.js"></script>

</body>
</html>