@extends('layouts::front')

@section('title', $company->name)
@section('desc', $company->desc)

@section('content')

    <app
        :company='@json($company)'
        :slugs='@json($slugs)'
        :banners='@json($banners)'
        :galleries='@json($galleries)'
        :studios='@json($studios)'
    ></app>

@endsection