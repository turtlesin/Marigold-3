@extends ('layout.main')

@section('content')

<div class="col-lg-12">
 <hr>
 <h1>{{ $post->title }}</h1>
 <p class="lead">BY {{ ucwords($post->user->firstname)}}</p>
 <hr>
 <p><span class="glyphicon glyphicon-time"></span> Posted {{ $date }}</p>
 <hr>
 <p class="lead">{{ $post->body}}</p>
 <hr>
 {{ HTML::link('/blogs', 'Go Back')}}

    
</div>




@stop