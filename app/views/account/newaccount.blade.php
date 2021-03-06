@extends('layout.main')

@section('content')
                @if ( Session::has('flash_message') )
                    <div class="{{ Session::get('flash_type') }}">
                          <h5>{{ Session::get('flash_message') }}</h5>
                    </div>
                    <br>
                @endif
                
<div id="primary">
<div id="new-account">
    <div class="entry-heading"><div class="entry-center">Izveidot jaunu profilu</div></div>
    <hr>
    
            @if($errors->has())<!--ivada kļūdas, ja lauki ir aizpildīti nepareizi-->
            <div id="form-errors">
                <p>Radušās sekojošas kļūdas:</p>

                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><!-- end form-errors -->
            @endif
            
    <!-- forma, ko nepieciešams aizpildīt, lai varētu izveidot jaunu paroli-->
    {{ Form::open(array('url'=>'account/create'))}}
    
    <table class="sign-in">
        <tr>
            <td>{{Form::label('vārds')}}</td>
        <td>{{Form::text('firstname')}}</td>
    </tr>
    <tr>
        <td>{{Form::label('uzvārds')}}</td>
        <td>{{Form::text('lastname')}}</td>
    </tr>
     <tr>
        <td>{{Form::label('lietotāja vārds')}}</td>
        <td>{{Form::text('username')}}</td>
    </tr>
    <tr>
        <td>{{Form::label('e-pasts')}}</td>
        <td>{{Form::text('email')}}</td>
    </tr>
    <tr>
        <td>{{Form::label('parole')}}</td>
        <td>{{Form::password('password')}}</td>
    </tr>
    <tr>
        <td>{{Form::label('parole atkārtoti')}}</td>
        <td>{{Form::password('password_confirmation')}}</td>
    </tr>
    <tr>
        <td>{{Form::label('telefona nr')}}</td>
        <td>{{Form::text('telephone')}}</td>
    </tr>
    <tr>
        <td colspan="2">
            {{ Form::submit('Izveidot profilu', array('class'=>'secondary-cart-btn'))}}
        </td>
    </tr>
    </table>
    {{Form::close()}}
</div><!-- end new-account -->
</div>
@stop