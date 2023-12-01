@extends('layouts::crm')

@section('title', 'Студии')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#createNew">
                            Добавить новую студию
                            <i class="fa fa-plus px-2"></i>
                        </button>
                    </h2>
                    <div class="accordion-collapse collapse" id="createNew">
                        <div class="accordion-body">
                            <form action="{{ route('crm.studios.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row row-cols-2 mb-4">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="address">Адрес</label>
                                            <input type="text" name="address" id="address" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="phone">Номер телефона</label>
                                        <input type="text" name="phone" id="phone" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row row-cols-2">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="navYandex">Ссылка на маршрут</label>
                                            <input type="text" name="navYandex" id="navYandex" class="form-control" placeholder="Необязательно">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="image">Изображение</label>
                                            <input type="file" name="image" id="image" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col mt-4">
                                        <button type="submit" class="btn btn-primary">
                                            Создать
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @if (session('success'))
            <div class="col-12">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
        @endif
        @if ($studios->isEmpty())
            <div class="col-12">
                <p>Нет ни одной студии - добавьте первую!</p>
            </div>
        @else
            <div class="col-12 row row-cols-3">
                @foreach ($studios as $studio)
                    <div class="col mb-4">
                        <div class="studio w-100 position-relative rounded overflow-hidden p-3 bg-secondary" style="height:250px">
                            <div class="position-absolute d-flex" style="z-index: 10">
                                <a href="{{ route('crm.studios.show', $studio->id) }}" class="fa fa-pencil btn btn-primary"></a>
                                <form action="{{ route('crm.studios.destroy', $studio->id) }}" method="post">
                                    @csrf @method('DELETE') <button type="submit" class="fa fa-trash btn btn-danger mx-2"></button>
                                </form>
                            </div>
                            <div class="position-absolute w-100 h-100 d-flex" style="top: 0; left: 0">
                                <img src="{{ $studio->image !== null ? $studio->image->path : '//via.placeholder.com/256x320' }}" alt="" class="img-fluid w-100" style="align-self: center">
                            </div>
                            <div class="w-100 d-flex align-items-end" style="height: 100%">
                                <div class="position-relative text-light">
                                    <h4 class="fs-5">{{ $studio->address }}</h4>
                                    <h5 class="fs-6">{{ $studio->phone }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection