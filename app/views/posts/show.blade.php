@extends ('layout.main')

@section('content')
<div id="primary">
<div class="col-lg-8">
	
    <div class="entry-heading"><div class="entry">{{ $post->title }}</div></div>
	
    <div class="entry-meta"><p><span class="glyphicon glyphicon-time"></span> Posted {{ $date }} by {{ ucwords($post->user->firstname) }}</p></div>
	
    <div class="body"><p class="lead">{{ $post->body }}</p></div>
</div>
<div class="col-lg">
    <table class="show-post">
        <tr>
        <td>{{ link_to_route('posts.edit', 'Update', array($post->id), array('class' => 'btn btn-primary')) }}</td>
        <td>{{ link_to_route('posts.index', 'Back to index', null, array('class' => 'btn btn-warning')) }}</td>
        </tr>
    </table>
</div>
</div>
@stop