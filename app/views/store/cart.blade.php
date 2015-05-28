@extends('layout.main')

@section('content')
<div id="shoping-cart">
    <div class="entry-heading"><h4 class="entry-title">Shopping Cart & Checkout</h4></div>
    <form action="http://www.paypal.com/cgi-bin/webscr" method="post">
        <table border="1">
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                
            </tr>
            
            @foreach($products as $product )
            <tr>
                <td>{{$product->id}}</td>
                <td>{{HTML::image($product->image, $product->name, array('width'=>'65', 'height'=>37))}}
                {{$product->name}}
                </td>
                <td>${{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                <td>
                    ${{$product->price}}
               &nbsp;
               &nbsp;
                <a href="/store/removeitem/{{ $product->identifier}}">
                        {{HTML::image('img/remove.gif', 'Remove product')}}
                    </a>
               </td>
            </tr>
            @endforeach
            
            <tr class="total">
                <td colspan="5">
                    <span>Total: ${{Cart::total()}}</span> <br/>
                    
                    <input type="hidden" name="cmd" value="xclick">
                    <input type="hidden" name="business" value="office@davanas.com">
                    <input type="hidden" name="item_name" value="Marigold Store Purchase">
                    <input type="hidden" name="amount" value="{{Cart::total()}}">
                    <input type="hidden" name="first_name" value="{{Auth::user()->firstname}}">
                    <input type="hidden" name="last_name" value="{{Auth::user()->lastname}}">
                    <input type="hidden" name="email" value="{{Auth::user()->email}}">
                    
                    {{HTML::link('/store', 'Continue Shopping', array('class'=>'tertiary-btn'))}}
                    <input type="submit" value="Checkout with paypal" class="secondary-cart-btn">
                        
                </td>
            </tr>
        </table>
        
    </form>
</div><!-- end shopping-cart-->

@stop
