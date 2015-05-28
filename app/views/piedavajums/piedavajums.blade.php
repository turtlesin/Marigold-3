@extends('layout.main')

@section('content')

<div id="slider-wrapper">
    <div id="image-slider">
	<ul>
            <li class="active-img">
                <img src="http://www.sewnews.com/blogs/sewing/files/2012/11/supplies.jpg" alt="" />
            </li>
        </ul>
        <div id="nav-bar">
            <a href="{{ URL::route('piedavajums-susana')}}">
        <div>
            <img src='img/rsz_sewing5.jpg'/>
        </div>
                Individuālie
            </a>
            <a href="{{ URL::route('piedavajums-izsusana')}}"><div>
                <img src='img/rsz_embroidery.jpg' /></div>
                Vairumā
            </a>
        </div>
    </div>
</div>
@stop