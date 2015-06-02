@extends('layout.main')

@section('content')

<div class="col-md-12">
	{{ link_to_route('posts.create', 'Izveidot jaunu rakstu', null, array('class' => 'btn btn-primary')) }}
</div>
@if ( Session::has('flash_message') )
<div class="success">
      <h5>{{ Session::get('flash_message') }}</h5>
</div>
<br>
@endif
@if($posts->count())
<div class="entry-heading"><div class="entry-center">Izveidotie bloga raksti</div></div><hr>
	<div class="col-md-12">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Nosaukums</th>
					<th>Apraksts</th>
					<th>Iveidošanas datums</th>
					<th>Apskatīt</th>
					<th>Labot</th>
					<th>Dzēst</th>
				</tr>
			</thead>
			<tbody>
				@foreach($posts as $p)
				<tr>
					<td>{{ $p->title }}</td>
					<td>{{ substr($p->body, 0, 120). '[...]'}}</td>
					<td><span class="label label-info">{{ Carbon::createFromTimestamp(strtotime($p->created_at))->diffForHumans() }}</span></td>
					<td>{{ link_to_route('posts.show', 'Apskatīt', array($p->id), array('class' => 'btn btn-info')) }}</td>
					<td>{{ link_to_route('posts.edit', 'Labot', array($p->id), array('class' => 'btn btn-warning')) }}</td>
                                        <td class="delete">
						{{ Form::open(array('method' => 'DELETE', 'route' => array('posts.destroy', $p->id))) }}
						{{ Form::submit('Dzēst', array('class' => 'btn btn-danger')) }}
						{{ Form::close() }}

					</td>
						
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	@else
	<div class="alert alert-info col-md-4" style="margin-top: 15px">Šobrīd raksti nav izveidoti</div>
	@endif



@stop