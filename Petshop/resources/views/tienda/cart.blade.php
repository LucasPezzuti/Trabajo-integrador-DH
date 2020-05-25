@extends('tienda.master')  {{-- hereda de master --}}

@section('title', 'Contacto') {{-- sobreescribo el valor del titulo --}}

@section('content')


<script type="text/javascript">
    <!--
        $(document).ready(function() {

            function autoCalcSetup() {
                $('form[name=cart]').jAutoCalc('destroy');
                $('form[name=cart] tr[name=line_items]').jAutoCalc({keyEventsFire: true, decimalPlaces: 2, emptyAsZero: true});
                $('form[name=cart]').jAutoCalc({decimalPlaces: 2});
            }
            autoCalcSetup();


            $('button[name=remove]').click(function(e) {
                e.preventDefault();

                var form = $(this).parents('form')
                $(this).parents('tr').remove();
                autoCalcSetup();

            });

            $('button[name=add]').click(function(e) {
                e.preventDefault();

                var $table = $(this).parents('table');
                var $top = $table.find('tr[name=line_items]').first();
                var $new = $top.clone(true);

                $new.jAutoCalc('destroy');
                $new.insertBefore($top);
                $new.find('input[type=text]').val('');
                autoCalcSetup();

            });

        });
    //-->
    </script>
    
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);
    
        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    
    </script>











    <form name="cart">    
    <div class="cointainer text-center">
        <div class="page-header">
            <h1><i class="fa fa-shopping-cart"></i>
                Carrito de compras
            </h1>
        </div>
        <div class="table-cart">
            
                @if(count($cart))
                <p>
                    <a href="{{ route('cart-trash') }}" class="btn btn-danger">
                        Vaciar carrito <i class="fa fa-trash"></i>
                    </a>
                </p>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Total de producto</th>
                            <th>Quitar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $item)
                        <tr>
                            <td>
                            <a href="{{ url('/uploads/'.$item->file_path.'/'.$item->imagen) }}" data-fancybox="gallery"> {{-- le paso como link la misma imagen pero sin el prefijo t_ para q al darle click abra la imagen grande --}}
                                <img src="{{ url('/uploads/'.$item->file_path.'/t_'.$item->imagen) }}" width="50px" ></td> {{-- aca hago uso del campo file_path de la tabla donde se guarda el path de la imagen --}}{{--  t_ es para llamar a la miniatura --}}
                            </a>
                            </td>

                            <td>{{ $item->nombre }}</td>
                            <td><input type="text" name="price" value="{{ number_format($item->precio,2) }}"></td>
                            <td>
                                <input 
                                    name="qty"
                                    type="text"
                                    min="1"
                                    max="100"
                                    value="1"

                                >

                            </td>
                            <td><input type="number" name="item_total" value="" jAutoCalc="{qty} * {price}"></td>
                            
                            <td>
                                <a href="{{ route('cart-delete', $item->slug)}}" class="btn btn-danger">
                                    <i class="fa fa-remove"></i>

                                </a>
                            </td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
                <h3 style="padding-top:100px;"><span class="label label-warning">No hay productos en el carrito</span></h3>
            @endif
            <hr>
            <p>
                <a href="{{ route('productos') }}" class="btn btn-primary">
                    <i class="fa fa-chevron-circle-left">Seguir comprando</i>
                </a>   
               <a  class="btn btn-primary" href="{{ url('/gracias') }}">Continuar<i class="fa fa-chevron-circle-right"></i> </a>
            </p>

            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                
                    <td><input type="text" name="subtotal" value="" jAutoCalc="SUM({item_total})"></td>
                    
                </tbody>
        </div>
    </div>
    </form>
    @endsection