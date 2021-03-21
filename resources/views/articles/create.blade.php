@extends('layout')

@section('head')
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" />
@endsection(head)

@section('content')


<div id="wrapper">
    <div id="page" class="container">
        <h1 class="title is-1">New Article</h1>
        <form method="POST" action="/articles">
            @csrf

            <div class="field">
                <label class="label" for="title">Title</label>
                <div class="control">
                    <input name="title" class="input  @error('title') is-danger @enderror" type="text" placeholder="Title" value="{{ old('title') }}">
                </div>
                @error('title')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>
                <div class="control">
                    <textarea class="textarea @error('excerpt') is-danger @enderror" name="excerpt" nplaceholder="Excerpt">
                    {{ old('excerpt') }}
                    </textarea>
                </div>

                @error('excerpt')
                <p class="help is-danger">{{ $message }}</p>
                @enderror

            </div>

            <div class="field">
                <label class="label" for="body">Body</label>
                <div class="control">
                    <textarea class="textarea @error('body') is-danger @enderror" name="body" placeholder="Body">
                    {{ old('body') }}
                    </textarea>
                </div>
                @error('body')
                <p class="help is-danger">{{ $message }}</p>
                @enderror

            </div>
            <div class="field">
                <label class="label" for="tags">Tags</label>

                <div class="select is-multiple">
                    <select multiple name="tags[]">
                        @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach

                    </select>
                    @error('tags')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>


            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection('content')