@extends('layout.main')

@section('content')
<div id="navsec">
            <div class="dav">
                <ul>
                    <li>
                        <a href="{{URL::route('store')}}"> {{ HTML::image('img/down-arrow.gif','')}}Shop by Category:</a></li>
                  
                            @foreach($catnav as $cat)
                            <li>{{ HTML::link('/store/category/'.$cat->id,$cat->name)}}</li>
                            @endforeach
                            <li>
                                 <div id="search-form">
                {{ Form::open(array('url'=>'store/search', 'method'=>'get'))}}
                {{ Form::text('keyword', null, array('placeholder'=>'Search by keyword',
                            'class'=>'search'))}}
                {{ Form::submit('Search', array('class'=>'search submit'))}}
                {{ Form::close()}}
            </div> <!-- End search-form -->
                            </li>  
                </ul>
            </div>
    @yield('search-keyword')
    @yield('pagination')
</div>
<p>{{ Session::get('success') }}</p>
<div id="primary">
<div id="product-image">
    {{HTML::image($product->image, $product->title)}}
</div>
<div id="product-details">
    <div class="entry-heading"><div class="entry">{{$product->title}}</div></div>
    <div class="body"><p>{{$product->description}}</p></div>
    
    <hr/>
    <table class="show-product">
        <tr>
            <td>{{Form::open(array('url'=>'store/addtocart'))}}</td>
            <td>{{Form::label('quantity', 'QTY')}}</td>
            <td>{{Form::text('quantity', 1, array('maxlength'=>'2'))}}</td>
    {{Form::hidden('id', $product->id)}}
        
    <td> <button type="submit" class="secondary-cart-btn">
            {{HTML::image('img/black-cart.png','Add to Cart')}}
            ADD TO CART
        </button> </td>
    {{Form::close()}}
    </tr>
    </table>
</div>
<div id="product-info">
    <table class="show-first">
        <tr>
            <td><p class="price">{{$product->price}} &#8364</p></td>
            <td>
                <p>
                    Pieejams:
                        <span class="{{Availability::displayClass($product->availability)}}">
                            {{Availability::display($product->availability)}}
                        </span>
                </p>
            </td>
            <td>
                <p>Produkta Kods: <span>{{$product->id}}</span></p>
            </td>
        </tr>
    </table>
    <table class="show-post">
        <tr>
            <td>
                <a href="{{ URL::previous() }}">Atpakaļ uz veikalu</a>
            </td>
        </tr>
    </table>
</div>
</div>

@stop
