@extends('layout.main')

@section('content')
        @if ( Session::has('flash_message') )
<div class="{{ Session::get('flash_type') }}">
      <h5>{{ Session::get('flash_message') }}</h5>
</div>
<br>
@endif

    <div class="entry-heading"><div class="entry-center">Izveidot jaunu produktu</div></div><hr>
<div id='primary'>
@if($errors->has())
<div id="form-errors">
    <p>Radušās sekojošas kļūdas:</p>
    
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error}}</li>
        @endforeach
    </ul>
</div><!--end form-errors-->
@endif
{{Form::token()}}
{{Form::open(array('url'=>'admin/products/create', 'files'=>true))}}
<table class="show-first">
    <tr>
        <td>{{Form::label('category_id', 'Kategorija')}}</td>
        <td>{{Form::select('category_id', $categories)}}</td>
    </tr>
    <tr>
        <td>{{Form::label('Nosaukums') }}</td>
        <td>{{Form::text('title')}}</td>
    </tr>
    <tr>
        <td>{{Form::label('Apraksts') }}</td>
        <td>{{Form::textarea('description')}}</td>
    </tr>
    <tr>
        <td>{{Form::label('Īsais_apraksts') }}</td>
        <td>{{Form::textarea('short_description')}}</td>
    </tr>
    <tr>
        <td>{{ Form::label('Cena') }}</td>
        <td>{{ Form::text('price', null, array('class'=>'form-price')) }}</td>
    </tr>
    <tr>
        <td>{{Form::label('image', 'Izvēlies attēlu') }}</td>
        <td>{{Form::file('image')}}</td>
    </tr>
    <tr>
        <td>{{Form::submit('Izveidot', array('class'=>'secondary-cart-btn'))}}</td>
    </tr>
</table>
{{Form::close()}}
</div>

<div class="entry-heading"><div class="entry-center">Produkti</div></div><hr>
    <div id="primary">
    <table>
        @foreach($products as $product)
        <tr>
            <td> {{ HTML::image($product->image, $product->title, array('width'=>'50'))}}
                {{ $product->title}}  </td>
            
            
            <td>{{Form::open(array('url'=>'admin/products/toggle-availability', 'class'=>'form-inliine')
                        )}}
            {{Form::hidden('id', $product->id)}}
            {{Form::select('availability',array('1'=> 'Ir uz vietas', '0'=>'Nav pieejams'), 
                $product-> availability) }}</td>
            <td>{{Form::submit('Atjaunot') }}
            {{Form::close() }}</td>
            <td>{{ link_to_route('products.show', 'Apskatīt', array($product->id), array('class' => 'btn btn-info')) }}</td>
            
            <td> {{ Form::open(array('url'=>'admin/products/destroy', 'class'=>'form-inline')) }}
                {{ Form::hidden('id',$product->id) }}
            {{ Form::submit('Dzēst') }}
            {{Form::close()}}</td>
        </tr>
        @endforeach
    </table>
    </div>

@stop
