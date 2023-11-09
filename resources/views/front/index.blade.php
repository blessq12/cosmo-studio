@extends('front.layout')

@section('content')
    <app
    :company='@json($company)'
    :slugs='@json($slugs)'
    ></app>
@endsection