@section('titulo')
    Products
@endsection

@extends('includes.base')

@section('scripts')


    <script type="text/javascript">

        $(document).ready(function(){

            /* ao clicar na div com a classe="products_div_buttom" executa a função */
            $(".products_div_buttom").click(function(){

                $(".products_div_buttom").css("background","black").attr('value', 'false');

                /* a função muda o background da div selecionada */	
                if ($(this).attr('value') == 'true') {

                    $(this).css("background","black").attr('value', 'false');
                    
                }else{

                    $(this).css("background","#46ab7e").attr('value', 'true');
                    
                }
            });
        });

    </script>

@endsection

@section('conteudo')

@if(Session::has('mensagem'))

    {{Session::get('mensagem')}}

@endif

{{csrf_field()}}

<!--***************************CONTEÚDO PRODUCTS***************************-->

<section id="products_section1">

    <div class="parallax_banner">

        <div class="parallax" data-parallax="scroll" data-z-index="1"   
        data-image-src="../images/banner_products.jpg">
        </div><!-- /parallax -->

    </div>

</section><!--/products_section1-->

<section id="products_section2">

    <div class="products_section2_rotate hidden-xs hidden-sm">
        <h4>FUELS AND OIL DERIVATES / BIOFUELS / CHEMICAL / AGRICULTURAL</h4>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-3">
                <div class="products_div">
                    <h1>PRODUCTS</h1>
                </div>
            </div>
        </div><!--/row-->

        <div class="row"> 
            <div class="col-md-1"></div>

            <div class="col-md-3"> 
                    <!-- Nav tabs -->

                    <ul class="nav" role="tablist">
                       
                    
                        <a href="#products1" aria-controls="products1" role="tab" data-toggle="tab">
                            <div style="background: #46ab7e" class="products_div_buttom" role="presentation">
                                <h3>FUELS AND DERIVATES</h3>
                            </div>
                        </a>
                   

                       <a href="#products2" aria-controls="products2" role="tab" data-toggle="tab">
                            <div class="products_div_buttom" role="presentation">
                                <h3>GLYCERIN</h3>
                            </div>
                        </a>

                       <a href="#products3" aria-controls="products3" role="tab" data-toggle="tab">
                            <div class="products_div_buttom" role="presentation">
                                <h3>BIOFUELS</h3>
                            </div>
                        </a>

                        <a href="#products4" aria-controls="products4" role="tab" data-toggle="tab">
                            <div class="products_div_buttom" role="presentation">
                                <h3>CHEMICAL</h3>
                            </div>
                        </a>

                       <a href="#products5" aria-controls="products5" role="tab" data-toggle="tab">
                            <div class="products_div_buttom" role="presentation">
                                <h3>AGRICULTURAL</h3>
                            </div>
                       </a>

                    </ul>
            </div>
            
            <div class="col-md-7">
                    <!-- Tab panes -->
                    
                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane fade in active div_image_products" id="products1" >
                        
                            <div class="image_products" style="background: url(../images/fuels_derivates.jpg) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;" ></div>

                            <!--
                            <div id="accordion1" role="tablist" aria-multiselectable="true">
                                <div class="panel-heading" role="tab" id="headingOne1">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                        <h5>FUELS AND DERIVATES</h5><span class="glyphicon glyphicon-triangle-bottom"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne1">
                                    <div class="panel-body">
                                        <p>
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            -->
                            
                        </div>

                        <div role="tabpanel" class="tab-pane fade div_image_products" id="products2">

                            <div class="image_products" style="background: url(../images/glycerin.jpg) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;" ></div>

                            <!--
                            <div id="accordion2" role="tablist" aria-multiselectable="true">
                                <div class="panel-heading" role="tab" id="headingOne2">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                        <h5>GLYCERIN</h5><span class="glyphicon glyphicon-triangle-bottom"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne2">
                                    <div class="panel-body">
                                        <p>
                                            Glycerin is a compound related to the alcohol function.
                                        </p>

                                        <p>
                                            It is refrigerated at room temperature (25°C/77ºF), hygroscopic, odorless, viscous and sweet-tasting. The glycerin is present in all oils and fats of animal and vegetable origin.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            -->

                        </div>

                        <div role="tabpanel" class="tab-pane fade div_image_products" id="products3">
                            
                            <div class="image_products" style="background: url(../images/biofuel.jpg) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;" ></div>

                            <!--
                            <div id="accordion3" role="tablist" aria-multiselectable="true">
                                <div class="panel-heading" role="tab" id="headingOne3">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                                        <h5>BIOFUELS</h5><span class="glyphicon glyphicon-triangle-bottom"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne3">
                                    <div class="panel-body">
                                        <p>
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            -->

                        </div>

                        <div role="tabpanel" class="tab-pane fade div_image_products" id="products4">
                        
                            <div class="image_products" style="background: url(../images/chemical.jpg) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;" ></div>
        
                            <!--
                            <div id="accordion4" role="tablist" aria-multiselectable="true">
                                <div class="panel-heading" role="tab" id="headingOne4">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4">
                                        <h5>CHEMICAL</h5><span class="glyphicon glyphicon-triangle-bottom"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne4">
                                    <div class="panel-body">
                                        <p>                                            
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            -->
                                
                        </div>

                        <div role="tabpanel" class="tab-pane fade div_image_products" id="products5">
                           
                            <div class="image_products" style="background: url(../images/agricultural.jpg) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;" ></div>

                            <!--
                            <div id="accordion5" role="tablist" aria-multiselectable="true">
                                <div class="panel-heading" role="tab" id="headingOne5">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapseOne5" aria-expanded="true" aria-controls="collapseOne5">
                                        <h5>AGRICULTURAL</h5><span class="glyphicon glyphicon-triangle-bottom"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne5">
                                    <div class="panel-body">
                                        <p>
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            -->

                        </div>

                    </div>

            </div>

        </div><!--/row-->
    </div><!--/container-->

</section><!--/products_section2-->

@endsection