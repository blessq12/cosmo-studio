@extends('layouts::crm')
@section('title', 'Галереи готовых работ')

@section('content')
    <div class="row mb-4">
        <div class="col-12">

            @if (session('success'))
                <div class="alert alert-success">
                    <p class="mb-0">{{ session('success') }}</p>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled p-0 m-0">
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Создать новую
                      <i class="fa fa-plus mx-2"></i>
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="{{ route('crm.galleries.store') }}" method="post" class="row row-cols-3 align-items-end">
                            @csrf
                            <div class="col">
                                <div class="form-group">
                                    <label for="name">Название</label>
                                    <input type="text" class="form-control" name="name" id="name" required placeholder="...Прически">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="uri">URI</label>
                                    <input type="text" class="form-control" name="uri" id="uri" required placeholder="...pricheski">
                                </div>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary w-100">Создать</button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-3">
        @if ($categories->isEmpty())
            <div class="col-12">
                Ни одной галереи еще нет - создайте первую!
            </div>
        @endif
        @foreach ($categories as $category)
            <div class="col mb-4">
                <div class="category-item border p-3 rounded">
                    <div class="d-flex justify-content-between">
                        <div class="d-block">
                            <span style="font-size: 10px">{{ $category->uri }}</span>
                            <h4>{{ $category->name }}</h4>
                        </div>
                        <span>{{ $category->images->count() }} шт</span>
                    </div>
                    <div class="d-flex">
                        <a href="{{ route('crm.galleries.show', $category->id) }}" class="btn btn-primary btn-sm">
                            Перейти
                            <i class="fa fa-sign-in mx-1"></i>
                        </a>
                        <form action="{{ route('crm.galleries.destroy', $category->id) }}" method="post">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mx-2">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection