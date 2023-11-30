@extends('layouts::crm')
@section('title', $gallery->name)

@section('content')
    <div class="row mb-2">
        <div class="col">
            <a href="{{ route('crm.galleries.index') }}" class="text-decoration-none">
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
    <div class="row mb-4">
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
    @if ($images->isEmpty())
        <div class="row">
            <div class="col-12">
                <p>Ни одной фотографии в галерею "{{ $gallery->name }}" еще не загружено</p>
            </div>
        </div>
    @endif
    <div class="row row-cols-4">
        @foreach ($images as $image)
            <div class="col mb-4">
                <div class="gallery-img position-relative overflow-hidden rounded p-2" style="min-height: 250px">
                    <form action="{{ route('crm.galleries.destroy-image', [$gallery->id, $image->id]) }}" method="post">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger position-absolute" style="z-index: 1">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                    <img src="{{ $image->path }}" alt="" class="position-absolute w-100" style="top: 0; left: 0">
                </div>
            </div>
        @endforeach
    </div>
@endsection