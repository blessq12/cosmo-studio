@extends('layouts::auth')

@section('title', 'Авторизация')

@section('content')
    <div class="wrap d-flex align-items-center" style="min-height: 100vh">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <h4>Авторизация</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="p-0 m-0 list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('user.user-login') }}" class="p-3 border border-primary rounded" method="POST">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="email">Введите логин</label>
                            <input type="text" name="email" id="email" class="form-control" autocomplete="username" required value="{{ old('email') }}">
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">Введите логин</label>
                            <div class="input-group">
                                <input type="password" name="password" id="password" class="form-control" autocomplete="current-password">
                                <span 
                                    class="input-group-text" 
                                    style="cursor: pointer" 
                                    onclick=" document.querySelector('#password').type == 'password' ? document.querySelector('#password').type = 'text' : document.querySelector('#password').type = 'password'"
                                >
                                    <i class="fa fa-eye"></i>
                                </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Войти</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
@endsection