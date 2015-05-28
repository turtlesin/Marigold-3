@extends('layout.main')

@section('content')

<div id='admin'>
    <div class="entry-heading"><h4 class="entry-title">Create New Product</h4></div><hr>

@if($errors->has())
<div id="form-errors">
    <p>The following errors have occured:</p>
    
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error}}</li>
        @endforeach
    </ul>
</div><!--end form-errors-->
@endif
<div id="primary">
{{Form::token()}}
{{Form::open(array('url'=>'admin/products/create', 'files'=>true))}}
<table class="show-first">
    <tr>
        <td>{{Form::label('category_id', 'Category')}}</td>
        <td>{{Form::select('category_id', $categories)}}</td>
    </tr>
    <tr>
        <td>{{Form::label('title') }}</td>
        <td>{{Form::text('title')}}</td>
    </tr>
    <tr>
        <td>{{Form::label('description') }}</td>
        <td>{{Form::textarea('description')}}</td>
    </tr>
    <tr>
        <td>{{Form::label('short_description') }}</td>
        <td>{{Form::textarea('short_description')}}</td>
    </tr>
    <tr>
        <td>{{ Form::label('price') }}</td>
        <td>{{ Form::text('price', null, array('class'=>'form-price')) }}</td>
    </tr>
    <tr>
        <td>{{Form::label('image', 'Chose an image') }}</td>
        <td>{{Form::file('image')}}</td>
    </tr>
    <tr>
        <td>{{Form::submit('Create Product', array('class'=>'secondary-cart-btn'))}}</td>
    </tr>
</table>
{{Form::close()}}
</div>

<div class="entry-heading"><h4 class="entry-title">Products</h4></div><hr>
    <div id="primary">
    <table>
        @foreach($products as $product)
        <tr>
            <td> {{ HTML::image($product->image, $product->title, array('width'=>'50'))}}
                {{ $product->title}}  </td>
            
            
            <td>{{Form::open(array('url'=>'admin/products/toggle-availability', 'class'=>'form-inliine')
                        )}}
            {{Form::hidden('id', $product->id)}}
            {{Form::select('availability',array('1'=> 'In Stock', '0'=>'Out of stock'), 
                $product-> availability) }}</td>
            <td>{{Form::submit('Update') }}
            {{Form::close() }}</td>
            <td>{{ link_to_route('products.show', 'Preview', array($product->id), array('class' => 'btn btn-info')) }}</td>
            
            <td> {{ Form::open(array('url'=>'admin/products/destroy', 'class'=>'form-inline')) }}
                {{ Form::hidden('id',$product->id) }}
            {{ Form::submit('delete') }}
            {{Form::close()}}</td>
        </tr>
        @endforeach
    </table>
    </div>
</div><!--end admin -->

@stop
