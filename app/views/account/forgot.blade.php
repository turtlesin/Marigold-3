@extends('layout.main')

@section('content')
        @if ( Session::has('flash_message') )
            <div class="{{ Session::get('flash_type') }}">
                  <h5>{{ Session::get('flash_message') }}</h5>
            </div>
            <br>
        @endif

<div id="primary">
    
    <div class="entry-heading"><div class="entry-sign">Atjauno paroli</div></div>
            @if($errors->has())<!-- pārbauda vai ir kādas kļūdas -->
           <div id="form-errors">
               <p>Radušās sekojošas kļūdas:</p>

               <ul>
                   @foreach($errors->all() as $error)
                   <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div><!-- end form-errors -->
           @endif
   
           <!--forma, ko nepieciešams aizpildīt, lai iegūtu jaunu paroli-->
{{ Form::open(array(URL::route('account-forgot-password-post'))) }} 
<table style="font-size: 20px; line-height: 2em;" id="form" class="sign-in">
    <tr>
        <td>{{ Form::label('e-pasts') }}</td>
        <td>{{ Form::text('email') }}</td>
    </tr>
    <tr>
        <td colspan="2">{{ Form::submit('Atjaunot') }}</td>
    </tr>
</table>
</div>

@stop