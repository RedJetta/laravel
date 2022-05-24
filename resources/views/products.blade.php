@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">@include( 'includes.product' )</div>
                </div>
            </div>
        </div>
    </div>
@endsection
