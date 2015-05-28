@extends ('layout.main')

@section ('content')
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
<div class="entry-heading"><div class="entry-center">{{ $category->name}}</div></div>
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
           <h5>Availability: 
               <span class="{{Availability::displayClass($product->availability)}}}">
                   {{Availability::display($product->availability)}}
               </span>
            </h5>
           <h5>Cena: 
             <span class="price">{{$product->price}} &#8364</span>
           </h5>
           
           <p>
               {{ Form::open(array('url'=>'store/addtocart'))}}
               {{Form::hidden('quantity',1)}}
               {{Form::hidden('id',$product->id)}}
               <button type="submit" class="cart-btn">
                  
                   {{HTML::image('img/black-cart.png','Add to Cart')}}
                   ADD TO CART
               </button>
               {{Form::close()}}
           </p>
       </li>
       @endforeach
</ul>
</div>
<?php echo $products->links() ?>
@stop

@section ('pagination')
    {{$products->links()}}
<!-- end pagination -->

@stop
