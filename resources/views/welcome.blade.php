@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ 'Welcome Home' }}</div>

                    <div class="card-body">

                        {{ 'U r on the home page' }}
                    </div>
                </div>
            </div>
            <div class="container">
                <form method="post" action="{{asset('home')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> address</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" name="picture1" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @foreach($articles as $art)
        <h2>{{$art->name}}</h2>
        <img width="200" height="200" src="{{asset('storage/'.$art->picture)}}">
        <a href="{{asset('home/'.$art->id.'/delete')}}">&times</a>
        <div class="card-body">
            <a href="{{asset('home/'.$art->id.'/edit')}}">Update</a>
        </div>
    @endforeach
@endsection
