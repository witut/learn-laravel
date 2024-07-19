@extends('layouts.master')
@section('content')
<main role="main" class="container">
    <h1 class="mt-5 text-danger">Home</h1>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ratione quaerat vero a, ullam reiciendis earum distinctio nihil exercitationem quidem neque odit aliquid quasi esse, repudiandae, adipisci non placeat.
    <div class="row ">
        @foreach ( $blogs as $blog)
            <div class="col col-md-4 mt-5">
                <div class="card p-2">
                    <h2>{{$blog['title']}}</h2>
                    <p>{{$blog['body']}}</p>
                </div>
            </div>
        @endforeach
    </div>
</main>
@endsection