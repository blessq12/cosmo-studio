@extends('layouts::front')

@section('title', 'Студия Космо')

@section('content')

    <app
        :company='@json($company)'
        :slugs='@json($slugs)'
        :banners='@json($banners)'
        :galleries='@json($galleries)'
        :studios='@json($studios)'
    ></app>

@endsection