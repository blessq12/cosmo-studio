@extends('layouts::front')

@section('title', 'Студия Космо')

@section('content')
    <app
        :company='@json($company)'
    ></app>
@endsection