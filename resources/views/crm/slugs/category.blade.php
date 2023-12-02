@extends('layouts::crm')

@section('title', 'Категория ' . $category->name )

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <a href="{{ route('crm.slugs.index') }}" class="text-decoration-none">
                <i class="fa fa-arrow-left" style="margin-right: 6px"></i>
                Назад в категории
            </a>
        </div>
        <div class="col-12 mt-2">
            <div class="accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#slugCategory">
                            Добавить новую услугу
                            <i class="fa fa-plus px-2"></i>
                        </button>
                    </h2>
                    <div class="accordion-collapse collapse" id="slugCategory">
                        <div class="accordion-body">
                            <form class="row row-cols-auto align-items-end" method="post" action="{{ route('crm.slugs.store-slug') }}">
                                @csrf
                                <input type="hidden" name="categoryId" value="{{ $category->id }}">
                                <div class="col-6 form-group">
                                    <label for="name">Название услуги</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                                <div class="col-2">
                                    <label for="lPrice">Цена "от"</label>
                                    <input type="text" name="lPrice" id="lPrice" class="form-control" required>
                                </div>
                                <div class="col-2">
                                    <label for="hPrice">Цена "до"</label>
                                    <input type="text" name="hPrice" id="hPrice" class="form-control" required>
                                </div>
                                <div class="col-2 form-group">
                                    <button type="submit" class="btn btn-primary w-100">Создать</button>
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
        @if ($category->slugs->isEmpty())
            <div class="col">
                <p>В этой категории нет ни одной добавленной услуги</p>
            </div>    
        @else
            <div class="col">
                <p class="text-warning">Пустые поля цены не будут отображаться</p>
                <div class="accordion">
                                @foreach ($category->slugs as $slug)
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#slug-{{$slug->id}}">
                                            {{ $slug->name }}
                                        </button>
                                    </h2>
                                    <div class="accordion-collapse collapse" id="slug-{{$slug->id}}">
                                        <div class="accordion-body">
                                            <form action="{{ route('crm.slugs.update', $slug->id) }}" method="post" class="row g-1 row-cols-auto align-items-end">
                                                @csrf @method('PATCH')
                                                <div class="col-5">
                                                    <div class="form-group">
                                                        <label for="name">Название услуги</label>
                                                        <input type="text" name="name" id="name" class="form-control" value="{{ $slug->name }}">
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <label for="lPrice">Цена "от"</label>
                                                    <input type="text" name="lPrice" id="lPrice" class="form-control" value="{{ $slug->lPrice }}">
                                                </div>
                                                <div class="col-2">
                                                    <label for="hPrice">Цена "до"</label>
                                                    <input type="text" name="hPrice" id="hPrice" class="form-control" value="{{ $slug->hPrice }}">
                                                </div>
                                                <div class="col-3 d-flex align-items-center">
                                                    <button type="submit" class="btn btn-primary mx-1">Сохранить</button>
                                                </form>
                                                <form action="{{ route('crm.slugs.destroy-slug',['category'=>$category->id,'id'=>$slug->id]) }}" method="post">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
            </div>
        @endif
    </div>
@endsection