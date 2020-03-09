@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1200px-Instagram_logo_2016.svg.png" style="height: 170px" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>155</strong> posts</div>
                <div class="pr-5"><strong>235</strong> followers</div>
                <div class="pr-5"><strong>215</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold   ">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="//{{ $user->profile->url }}">{{ $user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://thumbs.dreamstime.com/b/spring-flowers-blue-crocuses-drops-water-backgro-background-tracks-rain-113784722.jpg" class="w-100">
        </div>
        <div class="col-4">    
            <img src="https://thumbs.dreamstime.com/b/spring-flowers-blue-crocuses-drops-water-backgro-background-tracks-rain-113784722.jpg" class="w-100">
        </div>
        <div class="col-4">    
            <img src="https://thumbs.dreamstime.com/b/spring-flowers-blue-crocuses-drops-water-backgro-background-tracks-rain-113784722.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection
