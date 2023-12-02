@extends('layouts::crm')

@section('title', 'Услуги')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#slugCategory">
                            Добавить категорию
                            <i class="fa fa-plus px-2"></i>
                        </button>
                    </h2>
                    <div class="accordion-collapse collapse" id="slugCategory">
                        <div class="accordion-body">
                            <form class="row row-cols-auto align-items-end" method="post" action="{{ route('crm.slugs.store') }}">
                                @csrf
                                <div class="col form-group">
                                    <label for="name">Название категории</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                                <div class="col form-group">
                                    <button type="submit" class="btn btn-primary w-100">Создать категорию</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-3">
        @foreach ($slugs as $category)
        <div class="col">
            <div class="mb-4 border p-3 rounded" style="min-height: 120px">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="fs-6">{{ $category->name }}</h4>
                    <span style="white-space: nowrap" class="badge text-bg-primary d-flex">{{ $category->slugs->count() }} шт</span>
                </div>
                <div class="d-flex">
                    <a href="{{ route('crm.slugs.show', $category->id) }}" class="btn btn-primary btn-sm">
                        Перейти
                        <i class="fa fa-arrow-right"></i>
                    </a>
                    <form action="{{ route('crm.slugs.destroy', $category->id) }}" method="post">
                        @csrf @method('delete')
                        <button type="submit" class="btn btn-danger fa fa-trash mx-2"></button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection