@extends('partials.layout')

@section('content')
    <div class="container mx-auto">
        <a class="btn join-item btn-success" href="{{route('posts.index')}}">Back</a>
        <div class="mt-2">
            <div class="card bg-base-200 shadow-xl min-h-full mx-2">
                {{-- <figure>
                    <img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" />
                </figure> --}}
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p>{{ $post->snippet }}...</p>
                    <p class="text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
