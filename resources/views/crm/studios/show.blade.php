@extends('layouts.crm')

@section('title', 'Студия - ' . $studio->address)

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <a href="{{ route('crm.studios.index') }}" class="text-decoration-none">
                <i class="fa fa-arrow-left" style="margin-right: 12px"></i>
                Назад к списку
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
        <div class="col">
            <form action="" method="post">
                @csrf  @method('PATCH')
                <div class="form-group mb-4">
                    <label for="address">Адрес</label>
                    <input type="text" class="form-control" name="address" id="address" value="{{ $studio->address }}">
                </div>
                <div class="form-group mb-4">
                    <label for="phone">Телефон</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="{{ $studio->phone }}">
                </div>
                <div class="form-group mb-4">
                    <label for="navYandex">Маршрут(Яндекс)</label>
                    <textarea name="" class="form-control" id="" cols="30" rows="8">{{ $studio->navYandex }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Сохранить</button>
            </form>
        </div>
        <div class="col">
            @if (!$studio->image)
                <div class="alert alert-info text-center">
                    <h4 class="mb-0">Нет изображения</h4>
                </div>
                <form action="{{ route('crm.studios.store-image') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <input type="hidden" name="studioId" value="{{ $studio->id }}">
                        <input type="file" name="image" id="image" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mt-3">
                        <i class="fa fa-upload"></i>
                        Загрузить
                    </button>
                </form>
            @else
                <img src="{{ $studio->image->path }}" alt="" class="img-fluid rounded">
                <form action="{{ route('crm.studios.destroy-image', [$studio->id, $studio->image->id]) }}" method="post"> @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger mt-2">Удалить изображение
                        <i class="fa fa-trash px-1"></i>
                    </button>
                </form>
            @endif
        </div>
    </div>
@endsection