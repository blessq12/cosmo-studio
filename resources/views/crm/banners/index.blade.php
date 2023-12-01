@extends('layouts::crm')

@section('title', 'Баннеры')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <a href="{{ route('crm.banners.create') }}" class="btn btn-primary">
                Создать новый
                <i class="fa fa-plus px-2"></i>
            </a>
        </div>
    </div>
    @if (session('success'))
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    @endif
    <div class="row row-cols-2">
        @if ($banners->isEmpty())
            <div class="col-12">
                <p>Нет ни одного баннера - добавьте первый!</p>
            </div>
        @endif
        @foreach ($banners as $banner)
            <div class="col">!</div>
        @endforeach
    </div>
@endsection