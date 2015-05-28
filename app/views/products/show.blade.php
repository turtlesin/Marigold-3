@extends ('layout.main')

@section('content')
<div id="primary">

<div id="product-details">
    <div class="entry-heading"><div class="entry">{{$product->title}}</div></div>
    <div id="product-image">
    {{HTML::image($product->image, $product->title)}}
</div>
    <div class="body"><p>{{$product->description}}</p></div>

</div>
<div class="col-lg">
    <table class="show-post">
        <tr>
                <td>{{HTML::link('admin/products','Atpakaļ')}}</td>
        </tr>
    </table>
</div>
</div>
@stop