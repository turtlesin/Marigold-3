@extends('layout.main')

@section('content')

<div id="slider-wrapper">
    <div id="image-slider">
	<ul>
            <li class="active-img">
                <img src="http://www.sewnews.com/blogs/sewing/files/2012/11/supplies.jpg" alt="attēls" />
            </li>
        </ul>
        <div id="nav-bar">
            <a href="{{ URL::route('projekti-individualie')}}">
        <div>
            <img src='img/rsz_sewing5.jpg'alt="individuālie"/>
        </div>
                Individuālie
            </a>
            <a href="{{ URL::route('projekti-kolektivie')}}"><div>
                    <img src='img/rsz_embroidery.jpg' alt="vairumā"/></div>
                Vairumā
            </a>
        </div>
    </div>
</div>
<hr style="height:10pt; visibility:hidden;" />
      <!--Latvju rakstu sadaļas beigas -->
      <!-- -->
      <footer>
          @include('includes.footer')
</footer>
@stop