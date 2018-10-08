@extends('includes.base')

@section('titulo', 'BWI')

@section('conteudo')

@if(Session::has('mensagem'))

    {{Session::get('mensagem')}}

@endif

<!--***************************CONTEÚDO INDEX***************************-->
<section id="index_section1">
    
<!--*************************** SLIDE *************************** -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            
            <div class="item active image_section1 " style="background: url(../images/banner_index.jpg) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover;  -o-background-size: cover;   background-size: cover;">
                
                <div class="text_section1_rotate hidden-xs hidden-sm">
                    <h4>FUELS AND OIL DERIVATES / BIOFUELS / CHEMICAL / AGRICULTURAL</h4>
                </div>
                
                <div class="text_section1">
                    <div class="text_section1_center">
                        <h1 style="letter-spacing: 0.1em;">AN UNIQUE KNOWLEDGE</h1>
                        <h1 style="font-family: DINNextLTPro-Bold;">OF THE BRAZILIAN MARKET</h1>
                        <h3>______________</h3>
                        <h4>Lasting and original tailor-mate</h4>
                        <h4>solutions for our clients and partners.</h4>
                    </div>
                </div>
                
            </div>

            <div class="item image_section1 " style="background: url(../images/banner_index2.jpg) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover;  -o-background-size: cover;   background-size: cover;">
                
                <div class="text_section1_rotate hidden-xs hidden-sm">
                    <h4>FUELS AND OIL DERIVATES / BIOFUELS / CHEMICAL / AGRICULTURAL</h4>
                </div>

                <div class="text_section1">
                    <div class="text_section1_center">
                        <h1 style="letter-spacing: 0.1em;">BRAZIL IS THE 5TH</h1>
                        <h1 style="font-family: DINNextLTPro-Bold;">BIGGEST OIL CONSUMER</h1>
                        <h3>______________</h3>
                        <h4>can only deliver 81,64% of the gasoline and 89%</h4>
                        <h4>of the diesel demand,imports highly needed.</h4>
                         

                    </div>
                </div>
                
            </div>

            <div class="item image_section1 " style="background: url(../images/banner_index3.jpg) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover;  -o-background-size: cover;   background-size: cover;">
                
                <div class="text_section1_rotate hidden-xs hidden-sm">
                    <h4>FUELS AND OIL DERIVATES / BIOFUELS / CHEMICAL / AGRICULTURAL</h4>
                </div>

                <div class="text_section1">
                    <div class="text_section1_center">
                        <h1 style="letter-spacing: 0.1em;">POTENCIAL'S MAIN</h1>
                        <h1 style="font-family: DINNextLTPro-Bold;">FUEL TRADING HOUSE</h1>
                        <h3>______________</h3>
                        <h4>From resale to fuel production, Potencial stands out as</h4>
                        <h4>one of the country's largest groups in the sector.</h4>
                    </div>
                </div>
                
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<!--*************************** /SLIDE *************************** -->
</section><!--/section-->

<section id="index_section2">

    <div class="container">

        <div class="row">
            
            <div class="col-md-4 col-sm-4 col-xs-12">
            
                <div class="image_section2" style="background: url(../images/who_we_are_index.jpg) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;">
                
                
                <div class="text_section2">
                    <img src="{{asset('images/barra.png')}}" /> <h3>WHO WE ARE</h3>
                </div>

                </div>
             
                <!--<img src="{{asset('images/who_we_are_index.jpg')}}" class="img-responsive"/>-->
                <p>
                    BWI is an independent petrochemicals,
                    bio and fossil fuels trading house, with
                    its roots deep in Brazil, while stringly
                    connected to global markets
                </p> 
                
                <a href="{{route('who_we_are')}}" class="button_span"><span class="span_inclinado">/ VIEW SECTION</span></a>
                
            </div>
            
            <div class="col-md-4 col-sm-4 col-xs-12">

                <div class="image_section2 " style=" background: url(../images/background_index.jpg) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;">
                    
                    <div class="text_section2">
                        <img src="{{asset('images/barra.png')}}" /> <h3>BACKGROUND</h3>
                    </div>
    
                </div>

                <p>
                    Brazil is the 5 biggest olil consumer
                    globally, with a vast demand of diesel on
                    the 50 million m³ per year level and for 
                    gasoline floating around 30 million m³
                </p>
                <a href="{{route('background')}}" class="button_span"><span class="span_inclinado">/ VIEW SECTION</span></a>
            </div>
            
            <div class="col-md-4 col-sm-4 col-xs-12">

                <div class="image_section2" style=" background: url(../images/our_values_index.jpg) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;">
                    
                    <div class="text_section2">
                        <img src="{{asset('images/barra.png')}}" /> <h3>OUR VALUES</h3>
                    </div>
    
                </div>

                <p>
                    Our team works together in balance,
                    showing the highest levels of efficiency in
                    all activities of our business, always
                    focused in bringing true value...
                </p>
                <a href="{{route('our_values')}}" class="button_span"><span class="span_inclinado">/ VIEW SECTION</span></a>
            </div>

        </div>

    </div>

</section>

@endsection