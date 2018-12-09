@extends('layouts.app')

@section('content')
            <h1>{{$title}}</h1>
            @if(count($servis) >0)
                <ul class="list-group">
                    @foreach($servis as $service)
                        <li class="list-group-item">{{$service}}</li>
                    @endforeach
                </ul>
            @endif
@endsection