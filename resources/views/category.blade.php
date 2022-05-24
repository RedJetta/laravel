@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ 'Welcome CATEGORY' }}</div>

                    <div class="card-body">

                        {{ 'U r on the category page' }}
                    </div>
                </div>
            </div>
            <div class="container">
            {{$category->name}}<hr>
                {{$category->slug}}<hr>
            </div>
        </div>
    </div>

@endsection
