@extends('layout.main')

@section('content')
<div class="navcont">
            <div class="dav">
                <ul>
                    <li>
                        <a href="{{URL::route('all')}}">Visi produkti
                    </li>
                    <li>
                        <a href="{{URL::route('store')}}">Kategorijas:</a></li>
                  
                            @foreach($catnav as $cat)
                            <li>{{ HTML::link('/store/category/'.$cat->id,$cat->name)}}</li>
                            @endforeach
                            <li>
                                 <div id="search-form">
                {{ Form::open(array('url'=>'store/search', 'method'=>'get'))}}
                {{ Form::text('keyword', null, array('placeholder'=>'Meklēt pēc atslēgas vārda',
                            'class'=>'search'))}}
                {{ Form::submit('Meklēt', array('class'=>'search submit'))}}
                {{ Form::close()}}
            </div> <!-- End search-form -->
                            </li>  
                </ul>
            </div>
    @yield('search-keyword')
    @yield('pagination')
</div>
@if ( Session::has('flash_message') )
<div class="success">
      <h5>{{ Session::get('flash_message') }}</h5>
</div>
<br>
@endif
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
            <td>{{Form::label('quantity', 'Daudzums')}}</td>
            <td>{{Form::text('quantity', 1, array('maxlength'=>'2'))}}</td>
    {{Form::hidden('id', $product->id)}}
        
    <td> <button type="submit" class="secondary-cart-btn">
            {{HTML::image('img/black-cart.png','Add to Cart')}}
            Pievienot grozam
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
                    Pieejamība:
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
<hr style="height:20pt; visibility:hidden;" />
      <!--Latvju rakstu sadaļas beigas -->
      <!-- -->
      <footer>
          @include('includes.footer')
</footer>
@stop
