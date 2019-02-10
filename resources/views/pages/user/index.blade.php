@extends('layouts.template')

@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
            @include('components.user.header')
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            @include('components.user.resume')
            </div>
        </div>
        
    </div>
@endsection