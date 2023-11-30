@extends('layouts::crm')
@section('title', $gallery->name)

@section('content')
    <div class="row mb-2">
        <div class="col">
            <a href="{{ url()->previous() }}" class="text-decoration-none">
                <i class="fa fa-arrow-left mx-2"></i>
                Назад к галереям
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
    <div class="row">
        <div class="col-12">
            <div class="accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Добавить фото
                          <i class="fa fa-plus mx-2"></i>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="{{ route('crm.galleries.store-image') }}" class="row row-cols-2 align-items-end" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="galleryId" value="{{ $gallery->id }}">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="image">Изображение</label>
                                        <input type="file" class="form-control" name="image" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary w-100">
                                        Загрузить
                                    </button>
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {{ $images }}
        </div>
    </div>
@endsection