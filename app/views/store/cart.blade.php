@extends('layout.main')

@section('content')
<div id="shoping-cart">
@if ( Session::has('flash_message') )
<div class="success">
      <h5>{{ Session::get('flash_message') }}</h5>
</div>
<br>
@endif
    <div class="entry-heading"><div class="entry-center">Iepirkumu grozs</div></div>
    <hr>
    <form action="http://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        
        <table border="1">
            <tr>
                <th>#</th>
                <th>Nosaukums</th>
                <th>Cena</th>
                <th>Daudzums</th>
                <th></th>
                
            </tr>
            
            @foreach($products as $product )
            <tr>
                <td>{{$product->id}}</td>
                <td>{{HTML::image($product->image, $product->name, array('width'=>'65', 'height'=>37))}}
                {{$product->name}}
                </td>
                <td>{{$product->price}} &#8364</td>
                <td>{{$product->quantity}}</td>
                <td>
                <a href="/store/removeitem/{{ $product->identifier}}">
                        Izņemt produktu no groza
                    </a>
               </td>
            </tr>
            @endforeach
            
            <tr class="total">
                <td colspan="5">
                    <span>Kopā: {{Cart::total()}} &#8364</span> <br/>
                    
                   <input type="hidden" name="cmd" value="_ext-enter">
                    <input type="hidden" name="redirect_cmd" value="_xclick">
                    <input type="hidden" name="business" value="sintija.borskovica-facilitator@gmail.com">
                    <input type="hidden" name="item_name" value="Marigold Store Purchase">
                    <input type="hidden" name="amount" value="{{Cart::total()}}">
                    <input type="hidden" name="first_name" value="{{Auth::user()->firstname}}">
                    <input type="hidden" name="last_name" value="{{Auth::user()->lastname}}">
                    <input type="hidden" name="email" value="{{Auth::user()->email}}">
                    
                    {{HTML::link('/store', 'Turpināt iepirkties', array('class'=>'tertiary-btn'))}}
                    <input type="submit" value="Pirkt" class="secondary-cart-btn">
                        
                </td>
            </tr>
        </table>
        
    </form>
</div><!-- end shopping-cart-->

@stop
