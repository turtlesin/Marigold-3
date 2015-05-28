@extends('layout.main')

@section('content')
<div class="entry-heading"><div class="entry-center">Marigold Blogs</div></div>
<hr>
@foreach($posts as $p)
<div id="primary">
<div class="col-lg-8">
    
        <div class="entry-heading"><div class="entry">{{ HTML::link('blog/'.$p->slug, $p->title) }}</div></div>
        
        <div class="body"><p>{{ Str::limit($p->body, 450)}}</p></div>
        <table class="show-post">
                <tr>
                    <td><p>{{HTML::link('blog/'.$p->slug, 'Read More')}}</p><td>
                    <td><div class="entry-meta"><p><span class="glyphicon glyphicon-time"></span> Posted {{ Carbon::createFromTimeStamp(strtotime($p->created_at))->formatLocalized('%A %d %B %Y')}}
                                by {{ ucwords( $p->user->firstname ) }}</p></div></td>
                </tr>
            </table>
        </div>
</div>

@endforeach

    <?php echo $posts->links() ?>
<h4>Blog Search</h4>
            {{ Form::open(array('url' => 'search')) }}
            <div class="input-group">
              {{Form::text('search', '', array('class' => 'form-control'))}}
              <span class="input-group-btn">
              {{ Form::submit('Search', array('class' => 'btn btn-default'))}}
              </span>
            {{ Form::close()}}
@stop