@extends('includes.base')

@section('titulo', 'Our values')

@section('conteudo')

@if(Session::has('mensagem'))

    {{Session::get('mensagem')}}

@endif

<!--***************************CONTEÚDO OUR VALUES***************************-->

<section id="our_values_section1">

<div class="parallax_banner">

    <div class="parallax" data-parallax="scroll" data-z-index="1"   
    data-image-src="../images/banner_our_values.jpg">
    </div><!-- /parallax -->

</div>

</section><!--/our_values_section1-->

<section id="our_values_section2">

    <div>
        <div class="our_values_section2_rotate hidden-xs hidden-sm">
            <h4>FUELS AND OIL DERIVATES / BIOFUELS / CHEMICAL / AGRICULTURAL</h4>
        </div>

        <div class="container">
            
            <div class="row">

                <div class="col-md-1"></div>
                
                <div class="col-md-3">

                    <h1>OUR VALUES</h1>

                </div>

                <div class="col-md-6">

                    <h3>Efficiency</h3>
                    <p>
                        Our team works together in balance, showing the highest levels of efficiency in all activities of our business, always focused in bringing true value to our investors and clients in a fast and flexible manner yet solid and lasting.
                    </p>
                    
                    <h3>Transparency</h3>
                    <p>
                        Transparency breeds trust and trust is the foundation of our activity. We do what we say and we deliver our products in a reliable, cost effective and timely fashion.
                    </p>

                    <h3>Ingenuity</h3><br>
                    <p>
                        BWI is creative and original, bringing new solutions through our unique market knowledge and our entrepreneurial spirit, being able to identify and capture opportunities helping our clients to always stay ahead and by doing that, creating true value. 
                    </p>
                    
                    <h3>Our Mission</h3><br>
                    <p>
                        To become a global reference on the international fuel trading market.
                    </p>
                    
                    <h3>Our Vision</h3><br>
                    <p>
                        To exceed our customers expectations by always doing the right thing and always delivering our products as agreed, bringing true value to our partners.
                    </p>

                </div>

            </div>
            
        </div><!--/container-->
        
    </div>

</section><!--/our_values_section2-->

@endsection