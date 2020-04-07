@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/me.jpg" class="rounded-circle img-thumbnail" alt="">
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add new Post</a>
            </div>

            <div class="d-flex">
                <div class="pr-4"><strong> {{$user->posts->count()}} </strong>posts </div>
                <div class="pr-4"><strong>24k </strong>followers </div>
                <div class="pr-4"><strong>224 </strong>following </div>
            </div>

            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div> <a href="#">{{$user->profile->url ?? 'N/A'}}</a></div>
        </div>
    </div>

    <div class="row pt-4">

        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class="w-100" alt="">
                </a>
            </div>
        @endforeach

    </div>

</div>
@endsection
