<div id="wrapper">
    <header>
        <section id="action-bar">
            <nav class="dropdown">
                <ul>
                    <li>
                        <a href="#">Shop by Category {{ HTML::image('img/down-arrow.gif','Shop by Category')}}</a>
                        <ul>
                            @foreach($catnav as $cat)
                            <li>{{ HTML::link('/davanas/category/'.$cat->id,$cat->name)}}</li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="search-form">
                {{ Form::open(array('url'=>'davanas/search', 'method'=>'get'))}}
                {{ Form::text('keyword', null, array('placeholder'=>'Search by keyword',
                            'class'=>'search'))}}
                {{ Form::submit('Search', array('class'=>'search submit'))}}
                {{ Form::close()}}
            </div> <!-- End search-form -->
        </section>
    </header>
    @yield('search-keyword')
    @yield('pagination')
</div>
<h2>New Products</h2>
<hr>
<div id="products">
    @foreach($products as $product)
    <div class="product">
        <a href="/davanas/view/{{$product->id}}">
            {{HTML::image ($product->image, $product->title, array('class'=>'feature', 
                        'witdth'=>'240', 'height'=>'127'))}}

        </a>
        <h3><a href="/davanas/view/<?php echo $product->id; ?>">{{$product->title}}</a></h3>
        
        <p>{{$product->description}}</p>
        <h5>Availability:
            <span class="{{Availability::displayClass($product->availability)}}">
                {{Availability::display($product->availability)}}

            </span>
        </h5>
        
        <p>
            <a href="#" class="cart-btn">
                <span class="price">${{$product->price}}</span>
                {{HTML::image('img/white-cart.gif', 'Add to Cart')}}

                ADD TO CART
            </a>
        </p>
    </div>
    @endforeach
</div> <!--end products -->

@stop
