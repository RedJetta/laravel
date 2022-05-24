@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container">
        <form action="{{ asset('home') }}" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>


            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
