@extends('layout')

@section('content')

<div class="px-6 py-8 ">
    <div class="flex justify-between   container mx-auto ">
        <div class="w-full ">

            <div class="mt-6">
                <div class="max-w-4xl bg-white rounded-lg shadow-md ">
                    <h1 style="font-size: 2.25rem; line-height: 2.5rem;" class="bg-white  text-gray-700 font-bold mb-7">{{$article->title}}</h1>

                    <div class="">

                        <img class="w-full object-cover object-center lg:rounded " style="height: 30em;" src="https://images.unsplash.com/photo-1464863979621-258859e62245?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=333&amp;q=80" alt="{{$article->title}}">

                    </div>
                    <div class="px-10 py-6">
                        <div class="flex justify-between items-center">
                            <span class="font-light text-gray-600">Jun 1,2020</span>
                            <a href="#" class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">Laravel</a>
                        </div>
                        <div class="mt-2">
                            <a href="{{ $article->path()}}" class="text-2xl text-gray-700 font-bold hover:underline">
                                {{$article->title}}</a>
                            <div class="border-l-4 border-gray-500 pl-4 italic rounded my-8">
                                {{ $article->excerpt}}
                            </div>
                            <p class="mt-2 text-gray-600">{{ $article->body}}

                            </p>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                            <a href="#" class="text-blue-500 hover:underline"></a>
                            <div><a href="#" class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block">
                                    <h1 class="text-gray-700 font-bold hover:underline">Alex John</h1>
                                </a></div>
                        </div>
                    </div>

                    <div class="flex justify-start ">
                        @foreach($article->tags as $tag)
                        <div class="px-2 my-4"><a href="{{route('articels.index', ['tag'=>$tag->name])}}" class="px-2 py-1 bg-gray-300 text-gray-600 font-bold rounded hover:bg-gray-500">{{ $tag->name}}</a></div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>

        <div class="-mx-8 w-4/12 hidden lg:block object-center">
            <div class="px-6">
                <h1 class="mb-4 text-xl  font-bold text-gray-700">Authors</h1>
                <div class="flex flex-col bg-white max-w-sm px-4 py-4 mx-auto rounded-lg shadow-md">
                    <ul class="-mx-4">
                        <li class="flex item-center">
                            <img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                            <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Alex John</a><span class="text-gray-700 text-sm font-light">Created 23 Posts</span></p>
                        </li>
                        <li class="flex items-center mt-6"><img src="https://images.unsplash.com/photo-1464863979621-258859e62245?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=333&amp;q=80" alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                            <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Jane Doe</a><span class="text-gray-700 text-sm font-light">Created 52 Posts</span></p>
                        </li>
                        <li class="flex items-center mt-6"><img src="https://images.unsplash.com/photo-1531251445707-1f000e1e87d0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=281&amp;q=80" alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                            <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Lisa Way</a><span class="text-gray-700 text-sm font-light">Created 73 Posts</span></p>
                        </li>
                        <li class="flex items-center mt-6"><img src="https://images.unsplash.com/photo-1500757810556-5d600d9b737d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=735&amp;q=80" alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                            <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Steve Matt</a><span class="text-gray-700 text-sm font-light">Created 245 Posts</span></p>
                        </li>
                        <li class="flex items-center mt-6"><img src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=373&amp;q=80" alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                            <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Khatab
                                    Wedaa</a><span class="text-gray-700 text-sm font-light">Created 332 Posts</span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-10 px-6">
                <h1 class="mb-4 text-xl font-bold text-gray-700">Tag</h1>
                <div class="flex flex-col bg-white px-4 py-6 max-w-sm mx-auto rounded-lg shadow-md">

                    <ul>
                        @foreach($article->tags as $tag)
                        <li class="my-3">
                            <a href="{{route('articels.index', ['tag'=>$tag->name])}}" class="px-2 py-1 bg-gray-300 text-gray-600 font-bold rounded hover:bg-gray-500">{{ $tag->name}}</a>

                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="mt-10 px-8 py-6">
                <h1 class="mb-4 text-xl font-bold text-gray-700">Categories</h1>
                <div class="flex flex-col bg-white px-4 py-6 max-w-sm mx-auto rounded-lg shadow-md">
                    <ul>
                        <li><a href="#" class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                AWS</a></li>
                        <li class="mt-2"><a href="#" class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                Laravel</a></li>
                        <li class="mt-2"><a href="#" class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">- Vue</a>
                        </li>
                        <li class="mt-2"><a href="#" class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                Design</a></li>
                        <li class="flex items-center mt-2"><a href="#" class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                Django</a></li>
                        <li class="flex items-center mt-2"><a href="#" class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">- PHP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

















@endsection('content')