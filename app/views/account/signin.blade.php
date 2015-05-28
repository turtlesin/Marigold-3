@extends('layout.main')

@section('content')
<div id="primary">
<section id="signin-form">
    
    <div class="entry-heading"><div class="entry-sign">Man jau ir profils</div></div>
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
    
    {{ Form::open(array('url'=>'account/signin'))}}
    <table class="sign-in">
        <tr>
            <td> E-pasts </td>
            <td>{{Form::text('email')}}</td>
    </tr>
    <tr>
            <td> Parole </td>
            <td>{{Form::password('password')}}</td>
    </tr>
    <tr>
        <td colspan="2">{{Form::button('Pieslēgties', array('type'=>'submit', 'class'=>'secondary-cart-btn'))}}</td>
    </tr>
    
    
    </table>
    {{Form::close()}}
</section><!-- end signin-form -->
<section id="signup">
    
    <div class="entry-heading"><div class="entry-sign">Esmu jauns lietotājs</div></div>
    {{ HTML::link('account/newaccount','Izveidot jaunu profilu', array('class'=>'default-btn'))}}
</section><!-- end signup-->

<section id="signup">
    <div class="entry-heading"><div class="entry-sign">Aizmirsi paroli?</div></div>
    
    {{ HTML::link('account/forgot-password','Atjaunot paroli', array('class'=>'default-btn'))}}
</section><!-- end signup-->
</div>

@stop

