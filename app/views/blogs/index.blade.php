@extends('layout.main')

@section('content')
<div class="entry-heading"><div class="entry-center">Marigold Blogs</div></div>
<hr>
<div class="right">
    <h4>Meklēt rakstu</h4>
            {{ Form::open(array('url' => 'search')) }}
                <div class="input-group">
                  {{Form::text('search', '', array('class' => 'form-control'))}}
                    <span class="input-group-btn">
                        {{ Form::submit('Meklēt', array('class' => 'btn btn-default'))}}
                    </span>
                </div>
            {{ Form::close()}}
            
</div>
<div id="primary">
@foreach($posts as $p)

<div class="col-lg-8">
    
        <div class="entry-heading"><div class="entry">{{ HTML::link('blog/'.$p->slug, $p->title) }}</div></div>
        
        <div class="body"><p>{{ Str::limit($p->body, 450)}}</p></div>
        <table class="show-post">
                <tr>
                    <td>
                        <p>{{HTML::link('blog/'.$p->slug, 'Lasīt tālāk..')}}</p>
                    <td>
                    <td>
                        <div class="entry-meta">
                            <p>
                                 
                    Publicēja {{ ucwords( $p->user->username ) }} , {{ Carbon::createFromTimeStamp(strtotime($p->created_at))->formatLocalized(' %d %B %Y')}}
                               </p>
                        </div>
                    </td>
                </tr>
        </table>
        </div>

@endforeach
<br><?php echo $posts->links() ?> <br><br>
</div>
    

<hr style="height:50pt; visibility:hidden;" />
<footer>
          @include('includes.footer')
</footer>
@stop