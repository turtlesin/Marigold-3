@extends('layout.main')

@section('content')

<div id="admin">
	{{ Form::open(array('route' => 'posts.store')) }}
	@if($errors->any())
		<div class="alert alert-danger">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			{{ implode('', $errors->all('<li class="error">:message</li>')) }}
		</div>
	@endif
        
 <div class="entry-heading"><div class="entry-center">Raksta izveidošana</div></div><hr>
        <div id="primary">
            <table class="show-first">
            <tr>
                <td>
		{{ Form::label('title', 'Virsraksts') }}
                </td>
                <td>
                    {{ Form::text('title', '', array('class' => 'form-control', 'placeholder' => 'Ievadi virsrakstu...')) }}
                </td>
            </tr>
	<tr>
            <td>
		{{ Form::label('body', 'Raksta apraksts') }}
            </td>
            <td>
		{{ Form::textarea('body', '', array('class' => 'ckeditor')) }}
            </td>
	</tr>
	<tr>
            <td>
		{{ Form::label('m_desc', 'Īsais apraksts') }}
            </td>
            <td>
		{{ Form::text('m_desc', '', array('class' => 'form-control', 'placeholder' => 'Ievadi īso apraskstu..')) }}
        </td>
        </tr>
	<tr>
            <td>
		{{ Form::label('m_keys', 'Atslēgvārdi') }}
            </td>
            <td>
		{{ Form::text('m_keys', '', array('class' => 'form-control', 'placeholder' => 'Atslēgas vārdus atdali ar komatu')) }}
            </td>
        </tr>
	<tr>
            <td>
	{{ Form::submit('Izveidot', array('class' => 'btn btn-success')) }}
            </td>
            <td>
	{{ link_to_route('posts.index', 'Atpakaļ uz rakstu sadaļu', null, array('class' => 'btn btn-warning'))}}
            </td>
	{{ Form::close() }}
        </tr>
        </table>
        </div>
</div>

@stop