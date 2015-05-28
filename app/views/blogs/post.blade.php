@extends('layout.main')


@section('content')
<div id="primary">
<div class="col-lg-12">
 
    <div class="entry">{{ $post->title }}</div>
 
 <div class="entry-meta">
     <p>
         <span class="glyphicon glyphicon-time"></span>
         Posted {{ $date }} by {{ ucwords($post->user->firstname)}}</p>
 </div>
    <div class="body"> <p class="lead">{{ $post->body}}</p></div>
 
 <a href="{{ URL::previous() }}">Atpakaļ uz blogu</a>

    
</div>

</div>


@stop