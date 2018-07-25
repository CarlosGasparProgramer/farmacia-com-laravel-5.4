<!DOCTYPE html>
<!-- 
TEMPLATE NAME : Adminre - backend
VERSION : 1.3.0
AUTHOR : JohnPozy
AUTHOR URL : http://themeforest.net/user/JohnPozy
EMAIL : pampersdry@gmail.com
LAST UPDATE: 2015/01/05

** A license must be purchased in order to legally use this template for your project **
** PLEASE SUPPORT ME. YOUR SUPPORT ENSURE THE CONTINUITY OF THIS PROJECT **
-->
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ $titulo or "Gestfarm - Iniciar Sessão" }}</title>
        <meta name="author" content="pampersdry.info">
        <meta name="description" content="Adminre is a clean and flat backend and frontend theme build with twitter bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../image/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../image/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../image/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../image/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" href="../image/favicon.ico">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <!--/ Plugins stylesheet : optional -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="{{ url('assets/stylesheet/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ url('assets/stylesheet/layout.css') }}">
        <link rel="stylesheet" href="{{ url('assets/stylesheet/uielement.css') }}">
        <!--/ Application stylesheet -->

        <!-- Theme stylesheet : optional -->
        <!--/ Theme stylesheet : optional -->

        <!-- modernizr script -->
        <script type="text/javascript" src="{{ url('assets/plugins/modernizr/js/modernizr.js') }}"></script>
        <!--/ modernizr script -->
        <!-- END STYLESHEETS -->
    </head>
    <!--/ END Head -->

    <!-- START Body -->
    <body style="background-image: url('assets/image/login.jpg');">
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <section class="container">
                <!-- START row -->
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <!-- Brand --><br><br>
                        <div class="text-center" style="margin-bottom:40px;">
                            <span class="logo-figure inverse"></span>
                            <span class="logo-text inverse"></span>
                            <h5 class="semibold text-muted mt-5">Acesso restrito aos usuários do sistema</h5>
                        </div>
                        <!--/ Brand -->

                        
                        <hr><!-- horizontal line -->

                        <!-- Login form -->
                        <form class="panel" name="form-login" method="post" action="{{ route('login') }}">
                            <div class="panel-body">
                                <!-- Alert message -->
                                <div class="alert alert-warning">
                                    <span class="semibold">Note :</span>&nbsp;&nbsp;Just put anything and hit 'sign-in' button.
                                </div>
                                <!--/ Alert message -->
                                
                                <div class="form-group">
                                    {{ csrf_field() }}
                                    <div class="form-stack has-icon pull-left">
                                        <input name="email" type="email" class="form-control input-lg" placeholder="Email de Usuário" data-parsley-errors-container="#error-container" data-parsley-error-message="O nome de usuário é obrigatório, por favor preencha o campo" data-parsley-required>
                                        <i class="ico-user2 form-control-icon"></i>
                                    </div>
                                    <div class="form-stack has-icon pull-left">
                                        <input name="password" type="password" class="form-control input-lg" placeholder="Palavra Passe" data-parsley-errors-container="#error-container" data-parsley-error-message="A palavra passe é obrigatória, por favor preencha o campo" data-parsley-required>
                                        <i class="ico-lock2 form-control-icon"></i>
                                    </div>
                                </div>

                                <!-- Error container -->
                                <div id="error-container"class="mb15"></div>
                                <!--/ Error container -->

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox custom-checkbox">  
                                                <input type="checkbox" name="remember" id="remember" value="1">  
                                                <label for="remember">&nbsp;&nbsp;Guardar senha</label>   
                                            </div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <a href="javascript:void(0);">Esqueceu a senha?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group nm">
                                    <button type="submit" class="btn btn-block btn-success"><span class="semibold">Login</span></button>
                                </div>
                            </div>
                        </form>
                        <!-- Login form -->

                        <hr><!-- horizontal line -->

                        <p class="text-muted text-center"><a class="semibold">SISTEMA DE GESTÃO DE FARMÁCIA</a></p>
                    </div>
                </div>
                <!--/ END row -->
            </section>
            <!--/ END Template Container -->
        </section>
        <!--/ END Template Main -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Application and vendor script : mandatory -->
        <script type="text/javascript" src="{{ url('assets/javascript/vendor.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/javascript/core.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/javascript/backend/app.js') }}"></script>
        <!--/ Application and vendor script : mandatory -->

        <!-- Plugins and page level script : optional -->
        <script type="text/javascript" src="{{ url('assets/plugins/parsley/js/parsley.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/javascript/backend/pages/login.js') }}"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>