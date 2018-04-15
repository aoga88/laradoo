<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js sidebar-large"> <!--<![endif]-->

<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>{{ \App\Configuration::getValue('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description"/>
    <meta content="themes-lab" name="author"/>
    <link rel="shortcut icon" href="/assets/img/favicon.png">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="/assets/css/plugins.min.css" rel="stylesheet">
    <link href="/assets/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
    <link href="{{ mix('assets/css/style.css') }}" rel="stylesheet">
    <!-- END  MANDATORY STYLE -->
    <script src="/assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body class="login fade-in" data-page="login">
<!-- BEGIN LOGIN BOX -->
<div class="container" id="login-block">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
            <div class="login-box clearfix animated flipInY">
                <div class="login-logo">
                    <a href="/">
                        <div class="col-md-8 col-md-offset-2">
                            <img src="{{ \App\Configuration::getValue('logo') }}?t={{ time() }}" class="img-responsive"
                                 alt="{{ \App\Configuration::getValue('APP_NAME') }}">
                        </div>
                    </a>
                </div>
                <div class="login-form">
                    <!-- BEGIN ERROR BOX -->
                    <div class="alert alert-danger hide">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <h4>Error!</h4>
                        Your Error Message goes here
                    </div>
                    <!-- END ERROR BOX -->
                    <form class="" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" placeholder="Correo electrónico"
                                       class="input-field form-control user" name="email"
                                       value="{{ old('email') }}" required autofocus>
                                <div class="col-md-8 col-md-offset-2">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" placeholder="Contraseña"
                                       class="input-field form-control password"
                                       name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="col-md-2">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} />
                                    </div>
                                    <div class="col-md-10">
                                        Recordar mi sesión
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button id="" type="submit" class="btn btn-login ladda-button"
                                        data-style="expand-left"><span class="ladda-label">Iniciar Sesión</span>
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="login-links">
                        <a href="{{ route('password.request') }}">Recuperar mi contraseña</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END LOCKSCREEN BOX -->
<!-- BEGIN MANDATORY SCRIPTS -->
<script src="{{ mix('assets/plugins/jquery-1.11.1.min.js') }}"></script>
<script src="{{ mix('assets/plugins/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ mix('assets/plugins/jquery-ui-1.11.2.min.js') }}"></script>
<script src="{{ mix('assets/plugins/jquery.mobile-1.4.2.js') }}"></script>
<script src="{{ mix('assets/plugins/bootstrap.min.js') }}"></script>
<script src="{{ mix('assets/plugins/jquery.cookie.min.js') }}" type="text/javascript"></script>
<!-- END MANDATORY SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ mix('assets/plugins/backstretch.min.js') }}"></script>
<script src="{{ mix('assets/plugins/lada.min.js') }}"></script>
<script src="{{ mix('assets/js/account.js') }}"></script>
<!-- END PAGE LEVEL SCRIPTS -->
</body>

</html>
