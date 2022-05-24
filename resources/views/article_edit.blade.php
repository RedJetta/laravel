@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush
@section('content')

    <div class="container">
        <form method="post" action="{{ asset('home/'.$article->id.'/edit') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1"> address</label>
                <input type="text" name="name" class="form-control" id="name" value="{{$article->name}}" placeholder="name@example.com">
            </div>


            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" name="body" id="body" rows="3">{{$article->body}}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" name="picture1" class="form-control-file" id="picture1">
                <img width="200" height="200" src="{{asset('storage/'.$article->picture)}}">
            </div>

            <button type="submit" class="btn btn-primary">Remake</button>
        </form>
    </div>
@endsection
