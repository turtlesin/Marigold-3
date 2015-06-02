@extends ('layout.main')

@section('content')
        @if ( Session::has('flash_message') )
<div class="{{ Session::get('flash_type') }}">
      <h5>{{ Session::get('flash_message') }}</h5>
</div>
<br>
@endif
    <div class="entry-heading"><div class="entry-sign">Mainīt paroli</div></div>
    <hr>
  <div id="primary">  
    @if($errors->has())
    <div id="form-errors">
        <p>Radušās sekojošas kļūdas:</p>
        
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><!-- end form-errors -->
    @endif
 
{{ Form::open(array(URL::route('account-change-password-post'))) }} 
<table style="font-size: 20px; line-height: 2em;" id="form" class="show-first">
    <tr>
        <td>{{ Form::label('old_password', 'Parole') }}</td>
        <td>{{ Form::password('old_password') }}</td>
    </tr>
    <tr>
        <td>{{ Form::label('new_password', 'Jaunā parole') }}</td>
        <td>{{ Form::password('new_password') }}</td>
        </tr>
    <tr>
        <td>{{ Form::label('new_password_again', 'Jaunā parole atkārtoti') }}</td>
        <td>{{ Form::password('new_password_again') }}</td>
    </tr>
    <tr>
        <td colspan="2">{{ Form::submit('Mainīt paroli') }}</td>
    </tr>
</table>
</div>
@stop