@extends('layout.main')

@section('content')

            <ul>
                <li><a href="{{ URL::route('projekti-individual')}}">Individuālie</a></li>
            
                <li><a href="{{ URL::route('projekti-colective')}}">Kolektīviem un uzņēmumiem</a></li>
            </ul>

@stop