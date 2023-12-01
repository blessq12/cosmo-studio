@extends('layouts::crm')

@section('title', 'Создать новый баннер')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <a href="{{ route('crm.banners.index') }}" class="text-decoration-none">
                <i class="fa fa-arrow-left"></i>
                Назад
            </a>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2">
        <form action="{{ route('crm.banners.store') }}" method="post">
            @csrf
            
        </form>
    </div>
@endsection