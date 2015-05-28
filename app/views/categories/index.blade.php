@extends('layout.main')

@section('content')

<div id='admin'>
    <div class="entry-heading"><h4 class="entry-title">Categories</h4></div><hr>
    <div id="primary">
    <table class="show-post">
        @foreach($categories as $category)
        <tr>
            <td>{{$category->name}}<td> 
            <td>{{ Form::open(array('url'=>'admin/categories/destroy', 'class'=>'form-inline')) }}
            {{ Form::hidden('id',$category->id) }}
            {{ Form::submit('delete') }}</td>
            {{Form::close()}}
        </tr>
        @endforeach
    </table>
        
    </div>
    <div class="entry-heading"><h4 class="entry-title">Create New Category</h4></div><hr>
    <div id="primary">
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
{{Form::open(array('url'=>'admin/categories/create'))}}
<table class="show-product">
    <tr>
        <td>
    {{Form::label('name')}}
    {{Form::text('name')}}</td>
        <td>
            {{Form::submit('Create Category', array('class'=>'secondary-cart-btn'))}}</td>
</table>
{{Form::close()}}
    </div>
</div><!--end admin -->

@stop
