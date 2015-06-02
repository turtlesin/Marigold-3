@extends ('layout.main')

@section('content')

	{{ Form::model($post, array('method' => 'PATCH', 'route' => array('posts.update', $post->id))) }}
	@if($errors->any())
		<div class="alert alert-danger">
			{{ implode('', $errors->all('<li class="warning">:message</li>')) }}
		</div>
        <br>
	@endif
        
        <div id="primary">
{{Form::token()}}
{{Form::open(array('url'=>'admin/products/create', 'files'=>true))}}
<div class="entry-heading"><div class="entry-center">Raksta labošana</div></div>
<hr>
<table class="show-first">
    <tr>
        <td>{{ Form::label('title', 'Virsraksts') }}</td>
        <td>{{ Form::text('title', Input::old('title'), 
                    array('class' => 'form-control', 
            'placeholder' => 'Please insert your postt title here...')) }}</td>
    </tr>
    <tr>
        <td>{{ Form::label('body', 'Apraksts') }}</td>
        <td>{{ Form::textarea('body', Input::old('body'), array('class' => 'ckeditor')) }}</td>
    </tr>
    <tr>
        <td>{{ Form::label('m_desc', 'Īsais apraksts') }}</td>
        <td>
            {{ Form::text('m_desc', Input::old('m_desc'), 
            array('class' => 'form-control', 
            'placeholder' => 'Optional Description')) }}
        </td>
    </tr>
    <tr>
        <td>{{ Form::label('m_keys', 'Atslēgas vārdi') }}</td>
        <td>{{ Form::text('m_keys', Input::old('m_keys'), 
            array('class' => 'form-control', 
    'placeholder' => 'Keywords')) }}</td>
    </tr>
    <tr>
        <td>{{ Form::submit('Labot', array('class' => 'btn btn-success')) }}</td>
    </tr>
    <tr>
        <td>{{ link_to_route('posts.index', 'Atpakaļ uz rakstu sadaļu', null, array('class' => 'btn btn-warning')) }}</td>
    </tr>
</table>
{{Form::close()}}
</div>

@stop