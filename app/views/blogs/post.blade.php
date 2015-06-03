@extends('layout.main')


@section('content')
<div id="primary">
<div class="col-lg-12">
 
    <div class="entry">{{ $post->title }}</div>
 
 <div class="entry-meta">
     <p>
         <span class="glyphicon glyphicon-time"></span>
        Publicēja {{ ucwords( $post->user->username ) }} , {{ Carbon::createFromTimeStamp(strtotime($post->created_at))->formatLocalized(' %d %B %Y')}}</p>
 </div>
    <div class="body"> <p class="lead">{{ $post->body}}</p></div>
 
 <a href="{{ URL::previous() }}">Atpakaļ uz blogu</a>

    
</div>
    <br>
</div>

<hr style="height:60pt; visibility:hidden;" />
      <!--Latvju rakstu sadaļas beigas -->
      <!-- -->
      <footer>
          @include('includes.footer')
</footer>
@stop