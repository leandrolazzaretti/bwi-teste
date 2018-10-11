<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{asset('images/favicon.ico')}}" >
    <title>Admin</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('_admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('_admin/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootsnav.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/loading.css')}}">
    <link rel="stylesheet" href="{{asset('_admin/css/font-awesome.min.css')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body onload="fecha_carregando();">
    
    <!-- *************************** DIV LOADING *************************** -->

    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
        
            </div>
        </div>
    
    </div>

    <!-- *************************** MENU LATERAL *************************** -->

    <div id="wrapper" class="toggled">
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand li_alterado">
                    <a href="#" class="link_alterado">
                       BWI - ADMIN
                    </a>
                </li>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Who we are</a>
                </li>
                <li>
                    <a href="#">Background</a>
                </li>
                <li>
                    <a href="#">Products</a>
                </li>
                <li>
                    <a href="#">Our values</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-open" data-toggle="offcanvas">
                <i class="fa fa-bars botao_alterado" aria-hidden="true"></i>
            </button>
        </div>
        <!-- /#page-content-wrapper -->
        
        <!-- *************************** CONTEÚDO *************************** -->
        @yield('conteudo')

    </div>
    <!-- /#wrapper -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootsnav.js')}}"></script>

    @yield('scripts')

    <script type="text/javascript">

        function fecha_carregando(){
            $('#loading').fadeOut();
        }

    /************ MENU ************/
        $(document).ready(function () {
            var trigger = $('.hamburger'),
                overlay = $('.overlay'),
                isClosed = false;

                trigger.click(function () {
                hamburger_cross();      
                });

                function hamburger_cross() {

                if (isClosed == true) {          
                    overlay.hide();
                    trigger.removeClass('is-open');
                    trigger.addClass('is-closed');
                    isClosed = false;
                    $('.hamburger').removeClass('hamburger_alterado');
                    $('.botao_alterado').removeClass('fa-arrow-right');
                    $('.botao_alterado').addClass('fa-bars');
                } else {   
                    overlay.show();
                    trigger.removeClass('is-closed');
                    trigger.addClass('is-open');
                    isClosed = true;
                    $('.hamburger').addClass('hamburger_alterado');
                    $('.botao_alterado').removeClass('fa-bars');
                    $('.botao_alterado').addClass('fa-arrow-right');
                }
            }
            
            $('[data-toggle="offcanvas"]').click(function () {
                    $('#wrapper').toggleClass('toggled');
            });  
        });

    </script>

</body>
</html>