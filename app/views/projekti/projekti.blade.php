@extends('layout.main')

@section('content')

  @if (Auth::check())
  <p>Hello, {{Auth::user()->username}}</p>
  @else
  
  @endif
  <ul>
                <li><a href="{{ URL::route('projekti-individual')}}">Individuālie</a></li>
            
                <li><a href="{{ URL::route('projekti-colective')}}">Kolektīviem un uzņēmumiem</a></li>
            </ul>
  <div class="galery">
        <a href="#">
            <img class="thumb" src="http://lorempixum.com/200/200/nature/1">
            <img class="big" src="http://lorempixum.com/920/400/nature/1">
        </a>

        <a href="#">
            <img class="thumb" src="http://lorempixum.com/200/200/nature/2">
            <img class="big" src="http://lorempixum.com/920/400/nature/2">
        </a>

        <a href="#">
            <img class="thumb" src="http://lorempixum.com/200/200/nature/3">
            <img class="big" src="http://lorempixum.com/920/400/nature/3">
        </a>

        <a href="#">
            <img class="thumb" src="http://lorempixum.com/200/200/nature/4">
            <img class="big" src="http://lorempixum.com/920/400/nature/4">
        </a>

        <a href="#">
            <img class="big featured" src="http://designshack.net/tutorialexamples/thumbslider/featured.jpg">
        </a>
</div>
@stop
