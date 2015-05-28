@extends('layout.main')

@section('content')
<div id="primary">
    
    <div class="entry-heading"><div class="entry-sign">Atjauno paroli</div></div>
{{ Form::open(array(URL::route('account-forgot-password-post'))) }} 
<table style="font-size: 20px; line-height: 2em;" id="form" class="sign-in">
    <tr>
        <td>{{ Form::label('email', 'e-pasts') }}</td>
        <td>{{ Form::email('email') }}</td>
        @if($errors->has('email'))
            <td>{{ $errors->first('email')}}</td>
        @endif
    </tr>
    <tr>
        <td colspan="2">{{ Form::submit('Atjaunot') }}</td>
    </tr>
</table>
</div>

@stop