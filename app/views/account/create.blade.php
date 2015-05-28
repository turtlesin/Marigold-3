@extends('layout.main')

@section('content')
<div class="registration">
{{ Form::open(array(URL::route('account-create-post'))) }} 
<h2>Reģistrējies!</h2>
<p> {{ Form::label('email', 'E-pasts') }}
    {{ Form::email('email') }}</p>
        @if($errors->has('email'))
            {{ $errors->first('email')}}
        @endif
    
        <p> {{ Form::label('username', 'Lietotājvārds') }}
            {{ Form::text('username') }}</p>
        @if($errors->has('username'))
           {{ $errors->first('username')}}
        @endif
    
        <p> {{ Form::label('password', 'Parole') }}
            {{ Form::password('password') }}</p>
        @if($errors->has('password'))
            {{ $errors->first('password')}}
        @endif
   
    
        <p> {{ Form::label('password_again', 'Parole vēlreiz') }}
        {{ Form::password('password_again') }}</p>
        @if($errors->has('password_again'))
            {{ $errors->first('password_again')}}
        @endif
    
        <p>{{ Form::submit('Reģistrēties') }}</p>
</div>

@stop