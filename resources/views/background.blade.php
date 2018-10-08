@extends('includes.base')

@section('titulo', 'Background')

@section('conteudo')

@if(Session::has('mensagem'))

    {{Session::get('mensagem')}}

@endif

<!--***************************CONTEÚDO BACKGROUND***************************-->


<section id="background_section1">

    <div class="parallax_banner">

        <div class="parallax" data-parallax="scroll" data-z-index="1"
            data-image-src="../images/banner_background.jpg">

        </div><!-- /parallax -->

    </div>

</section><!--/background_section1-->

<section id="background_section2">

    <div class="container">
    
        <div class="row">
        
            <div class="col-md-1"></div>

            <div class="col-md-3">
                <h1>BACKGROUND</h1>
            </div>

            <div class="col-md-6">
                <h3>
                    Brazil is one of the biggest oil markets globally, with a diesel demand of 50 million m3 yearly and a 35 million level demand for gasoline. 
                </h3>
                    
                <p>
                    Considering that domestic production can only deliver 86,44% of the gasoline and 89% of the diesel demand, therefore imports are highly needed.
                </p>
            </div>

        </div>

    </div>

</section><!--/background_section2-->

@endsection