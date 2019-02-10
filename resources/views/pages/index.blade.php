@extends('layouts.template')

@section('appendCss')
    @parent
    <link href="{{asset('/')}}css/grayscale.min.css" rel="stylesheet">
@endsection

@section('content')
    @include('components.usercard')
@endsection