@extends('layout')

@section('content')

<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            @foreach($articles as $article)
            <div class="title">
                <a href="{{ $article->path()}}">
                    <h2>{{$article->title}}</h2>
                </a>
            </div>
            <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
            <p>{{$article->excerpt}} </p>
            @endforeach
        </div>
        <div id="sidebar">
            <ul class="style1">
                @foreach($articles as $article)
                <li class="first">
                    <h3><a href="/articles/{{ $article->id}}">{{$article->title}}</a></h3>
                    <p><a href="/articles/{{ $article->id}}">{{ $article->excerpt}}</a></p>
                </li>
                @endforeach

            </ul>
            <div id="stwo-col">
                <div class="sbox1">
                    <h2>Etiam rhoncus</h2>
                    <ul class="style2">
                        <li><a href="#">Semper quis egetmi dolore</a></li>
                        <li><a href="#">Quam turpis feugiat dolor</a></li>
                        <li><a href="#">Amet ornare hendrerit lectus</a></li>
                        <li><a href="#">Quam turpis feugiat dolor</a></li>
                    </ul>
                </div>
                <div class="sbox2">
                    <h2>Integer gravida</h2>
                    <ul class="style2">
                        <li><a href="#">Semper quis egetmi dolore</a></li>
                        <li><a href="#">Quam turpis feugiat dolor</a></li>
                        <li><a href="#">Consequat lorem phasellus</a></li>
                        <li><a href="#">Amet turpis feugiat amet</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')