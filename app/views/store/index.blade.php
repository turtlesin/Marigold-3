@extends ('layout.main')

@section('content')
<div class="navcont">
            <div class="dav">
                
                <ul>
                    <li><a href="{{URL::route('all')}}">Visi produkti</a></li>
                    <li><a href="{{URL::route('store')}}">Kategorijas:</a></li>
                  
                            @foreach($catnav as $cat)
                            <li>{{ HTML::link('/store/category/'.$cat->id,$cat->name)}}</li>
                            @endforeach
                            <li>
                                 <div id="search-form">
                {{ Form::open(array('url'=>'store/search', 'method'=>'get'))}}
                {{ Form::text('keyword', null, array('placeholder'=>'Meklēt pēc atslēgvārda',
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
<div class="{{ Session::get('flash_type') }}">
      <h5>{{ Session::get('flash_message') }}</h5>
</div>
<br>
@endif
<div class="entry-heading"><div class="entry-center">Jaunākie produkti</div></div>
<hr>

<div class="product">
<ul class="products">
       @foreach($products as $product)
       <li>
           <a href="/store/view/{{ $product->id}}">
               {{ HTML::image($product->image, $product->title, array('class'=>'feature',
                           'width'=>'240', 'height'=> '127'))}}
           </a>
           <h3><a href="/store/view/{{$product->id}}">{{ $product->title}}</a></h3>
           <p>{{$product->short_description}}</p>
           <h5>Pieejamība: <span class="{{Availability::displayClass($product->availability)}}}">
                   {{Availability::display($product->availability)}}
               </span>
           </h5>
           <h5>Cena: <span class="price">{{$product->price}} &#8364</span>
           </h5>
           <p>
               {{ Form::open(array('url'=>'store/addtocart'))}}
               {{Form::hidden('quantity',1)}}
               {{Form::hidden('id',$product->id)}}
               <button type="submit" class="cart-btn">
                   
                   {{HTML::image('img/black-cart.png','Add to Cart')}}
                   Pievienot grozam
               </button>
               {{Form::close()}}
           </p>
       </li>
       @endforeach
</ul>
</div>
<hr style="height:10pt; visibility:hidden;" />
      <footer>
          @include('includes.footer')
</footer>
@stop
