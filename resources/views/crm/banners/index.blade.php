@extends('layouts::crm')

@section('title', 'Баннеры')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#banner">
                            Создать новый баннер
                            <i class="fa fa-plus px-2"></i>
                        </button>
                    </h2>
                    <div class="accordion-collapse collapse" id="banner">
                        <div class="accordion-body">
                            <form action="{{ route('crm.banners.store') }}" method="post" enctype="multipart/form-data" class="row row-cols-2 align-items-end">
                                @csrf
                                <div class="col mb-2">
                                    <div class="form-group">
                                        <label for="header">Заголовок</label>
                                        <input type="text" name="header" id="header" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="form-group">
                                        <label for="subheader">Подзаголовок</label>
                                        <input type="text" name="subheader" id="subheader" class="form-control" placeholder="Необязательно">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="image">Изображение (16:9)</label>
                                        <input type="file" name="image" id="image" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary w-100">
                                        Создать
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
    <div class="row row-cols-2 g-1">
        @if ($banners->isEmpty())
            <div class="col-12">
                <p>Нет ни одного баннера - добавьте первый!</p>
            </div>
        @endif
        @foreach ($banners as $banner)
            <div class="col mb-4">
                <div class="position-relative rounded" style="height: 250px; overflow: hidden">
                    <div class="position-absolute top-0 h-100 w-100" style="background: url({{ $banner->image->path }});background-size:cover"></div>
                    <div class="position-relative d-flex align-items-center h-100 w-100 p-3">
                        <div class="position-absolute" style="top:12px;left: 12px">
                            <form action="{{ route('crm.banners.destroy', $banner->id) }}" method="post">
                                @csrf @method('delete')
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                        <div class="d-block text-light">
                            <h5 class="fs-5">{{ $banner->header }}</h5>
                            {!! $banner->subheader !== null ? '<p class="fs-6">' . $banner->subheader . '</p>' : ''!!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection