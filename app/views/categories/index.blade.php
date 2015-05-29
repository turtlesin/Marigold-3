@extends('layout.main')

@section('content')

<div id='admin'>
    <div class="entry-heading"><h4 class="entry-center">Kategorijas</h4></div></div><hr>
    <div id="primary">
    <table class="show-post">
        @foreach($categories as $category)
        <tr>
            <td>{{$category->name}}<td> 
            <td>{{ Form::open(array('url'=>'admin/categories/destroy', 'class'=>'form-inline')) }}
            {{ Form::hidden('id',$category->id) }}
            {{ Form::submit('dzēst') }}</td>
            {{Form::close()}}
        </tr>
        @endforeach
    </table>
        
    </div>
    <div class="entry-heading"><div class="entry-center">Izveidot jaunu kategoriju</h4></div></div><hr>
    <div id="primary">
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
{{Form::open(array('url'=>'admin/categories/create'))}}
<table class="show-product">
    <tr>
        <td>
    {{Form::label('Nosaukums')}}
    {{Form::text('name')}}</td>
        <td>
            {{Form::submit('Izveidot', array('class'=>'secondary-cart-btn'))}}</td>
</table>
{{Form::close()}}
    </div>
</div><!--end admin -->

@stop
