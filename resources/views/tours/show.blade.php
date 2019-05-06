@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success">
                  {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Tour profile') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">{{ __('Category') }}</div>
                        <div class="col-md-6">{{ $tour->category_id }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">{{ __('Tour name') }}</div>
                        <div class="col-md-6">{{ $tour->category_name }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">{{ __('Price') }}</div>
                        <div class="col-md-6">{{ $tour->price }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">{{ __('Image') }}</div>
                        <div class="col-md-6">{{ $tour->image }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">{{ __('Quantity') }}</div>
                        <div class="col-md-6">{{ $tour->quantity }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">{{ __('Rating') }}</div>
                        <div class="col-md-6">{{ $tour->avg_rating }}</div>
                    </div>
                </div>
            </div>

            <br>
            <a href="{{ route('Tours.create') }}" class="btn btn-info" role="button">Create Tour</a>
        </div>
    </div>
</div>
@endsection