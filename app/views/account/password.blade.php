@extends ('layout.main')

@section ('content')
<div class="entry-heading"><h4 class="entry-title">Mainīt paroli</h4></div><hr>
<div id="primary">
{{ Form::open(array(URL::route('account-change-password-post'))) }} 
<table style="font-size: 20px; line-height: 2em;" id="form" class="show-first">
    <tr>
        <td>{{ Form::label('old_password', 'Old password') }}</td>
        <td>{{ Form::password('old_password') }}</td>
        @if($errors->has('old_password'))
            <td>{{ $errors->first('old_password')}}</td>
        @endif
    </tr>
    <tr>
        <td>{{ Form::label('password', 'New password') }}</td>
        <td>{{ Form::password('password') }}</td>
        @if($errors->has('password'))
            <td>{{ $errors->first('password')}}</td>
        @endif
    </tr>
    <tr>
        <td>{{ Form::label('password_again', 'New password again') }}</td>
        <td>{{ Form::password('password_again') }}</td>
    </tr>
    <tr>
        <td colspan="2">{{ Form::submit('Change pasword') }}</td>
    </tr>
</table>
</div>
@stop