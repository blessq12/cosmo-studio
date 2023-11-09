@extends('front.layout')

@section('content')
    <app
    :company='@json($company)'
    ></app>
@endsection