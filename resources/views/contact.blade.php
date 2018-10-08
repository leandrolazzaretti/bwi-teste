@section('conteudo')

@section('titulo', 'Contact')

@extends('includes.base')

@section('conteudo')

@if(Session::has('mensagem'))

    {{Session::get('mensagem')}}

@endif

<!--***************************CONTEÚDO CONTACT***************************-->

<section id="contact_section1">

    <div class="parallax_banner">

        <div class="parallax" data-parallax="scroll" data-z-index="1"   
        data-image-src="../images/banner_contact.jpg">
        </div><!-- /parallax -->

    </div>

</section><!--/contact_section1-->

<section id="contact_section2">

    <div>
        <div class="contact_section2_rotate hidden-xs hidden-sm">
            <h4>FUELS AND OIL DERIVATES / BIOFUELS / CHEMICAL / AGRICULTURAL</h4>
        </div>

        <div class="container">
            
            <div class="row" style="margin-bottom: 40px;">

            <div class="col-md-2"></div>
            
            <div class="col-md-2">

                <h1>CONTACT</h1>

            </div>

            <div class="col-md-1"></div>

            <div class="col-md-3">

                <h3>Eduardo Puertas</h3>
                <p>+ 55 (11) 9924 00759</p>
                <p>+ 55 (11) 98635 9375</p>
                <p>eduardo.puertas@bwitrading.com</p>
                
                <h3>Gustavo Mariano</h3>
                <p>+ 55 (11) 9914 61367</p>
                <p>+ 55 (11) 98746 9977</p>
                <p>gustavo.mariano@bwitrading.com</p>

                <h3>João Bosco Gasparini</h3><br>
                <p>+ 55 (41) 98807-4606</p>
                <p>bosco.gasparini@bwitrading.com</p>

                <p style="font-family: DINNextLTPro-Bold; color: #000; margin-top: 20px">+55 11 4171.4794</p>
            </div>

            </div><!--/row-->

            <div class="row">

                <div class="col-md-2"></div>

                <div class="col-md-2">
                    <h1 style="margin-top: 0;">ADRESS</h1>
                </div>

                <div class="col-md-1"></div>

                <div class="col-md-3">
                    <p>183 PROF. ARTUR RAMOS STREET</p>
                    <p>01454-011 SÃO PAULO, SP</p>
                    <p>BRAZIL</p>

                </div>

            </div>
            
        </div><!--/container-->
        
    </div>

</section><!--/contact_section2-->

@endsection