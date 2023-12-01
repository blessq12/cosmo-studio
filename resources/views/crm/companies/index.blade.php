@extends('layouts::crm')

@section('title', 'Основное')

@section('content')
    <div class="row">
        @if (session('success'))
            <div class="col-12">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
        @endif
        <div class="col-12 col-md-6">
            <form action="{{ route('crm.companies.update', $company->id) }}" method="post">
                @csrf @method('patch')
                <div class="form-group mb-4">
                    <label for="name">Название</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $company->name }}">
                </div>
                <div class="form-group mb-4">
                    <label for="desc">Описание (не более 200 символов)</label>
                    <textarea name="desc" id="desc" cols="30" rows="3" class="form-control">{{ $company->desc }}</textarea>
                </div>
                <h5 class="fs-5">Контактная информация</h5>
                <div class="form-group mb-4">
                    <label for="email">Email адрес</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{ $company->email }}">
                </div>
                <div class="form-group mb-4">
                    <label for="vk">Ссылка на группу в ВК</label>
                    <input type="text" name="vkLink" id="vkLink" class="form-control" value="{{ $company->vkLink }}">
                </div>
                <div class="form-group mb-4">
                    <label for="acc2gis">Ссылка на 2gis</label>
                    <input type="text" name="acc2gis" id="acc2gis" class="form-control" value="{{ $company->acc2gis }}">
                </div>
                <div class="form-group mb-4">
                    <label for="accYandex">Ссылка на Yandex</label>
                    <input type="text" name="accYandex" id="accYandex" class="form-control" value="{{ $company->accYandex }}">
                </div>
                <button type="submit" class="btn btn-primary w-100">Сохранить</button>
            </form>
        </div>
    </div>
@endsection