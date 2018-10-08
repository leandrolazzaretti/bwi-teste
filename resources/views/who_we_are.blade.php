@extends('includes.base')

@section('titulo', 'Who we are')

@section('conteudo')

@if(Session::has('mensagem'))

    {{Session::get('mensagem')}}

@endif


<!--***************************CONTEÚDO WHO WE ARE***************************-->

<section id="who_we_are_section1">

    <div class="parallax_banner">

        <div class="parallax" data-parallax="scroll" data-z-index="1"   
            data-image-src="../images/banner_who_we_are.jpg">
        </div><!-- /parallax -->

    </div>

</section><!--/who_we_are_section1-->

<section id="who_we_are_section2">

    <div>
        <div class="who_we_are_text_section2_rotate hidden-xs hidden-sm">
            <h4>FUELS AND OIL DERIVATES / BIOFUELS / CHEMICAL / AGRICULTURAL</h4>
        </div>

        <div class="container">

            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-3">
                    <h1>WHO WE ARE</h1>
                </div>

                <div class="col-md-6">
                    <h3>
                        BWI is an independent petrochemicals, bio and fossil fuels trading house, with its roots deep in Brazil, while strongly connected to global markets
                    </h3>

                    <p>
                        The company was created on the recent opening of fuel importation in Brazil to the private sector. BWI has an unique knowledge of Brazilian logistics, creating efficient and cost effective solutions to the local landscape. We work with a “long term” approach, structuring tailor-made operations for our clients and partners.
                    </p>

                    <span><img src="{{asset('images/potencial_who_we_are.png')}}"></span>

                    <p>
                        From resale to fuel production, Potencial stands out as one of the country's largest groups in the sector. It has been 24 years of entrepreneurship, innovation and focus on quality. As a result of this work, today we are among the 5 largest biodiesel plants and one of the 10 largest fuel distributors in Brazil, serving more than 5 thousand active customers in the South and Southeast. As specialists in this market and with a very well reputed brand, we still act as RRT (Retailer – Reseller - Transporter) in the State of Paraná. In addition, we also have a commitment to society, promoting various projects of social inclusion and supporting family farming to strengthen our country's economic development. 
                    </p>

                    <p>
                        Facing such market conditions, Potencial has decided for investing in a Fuel Trading House becoming the main partner in BWI.
                    </p>

                    <p style="font-family: DINNextLTPro-Bold; color: #000">
                        Potencial Group. We have plenty of fuel to go farther and farther.
                    </p>

                </div>

            </div><!--/row-->

        </div><!--/container-->

    </div>

</section><!--/who_we_are_section2-->

@endsection