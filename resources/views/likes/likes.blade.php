@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach($chusqer->likes as $like)
            <h5>
                {{$like->user->slug}}
            </h5>
        @endforeach
    </div>
@endsection