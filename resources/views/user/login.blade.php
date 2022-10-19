@extends('welcome')

@section('title', 'авторизация')

@section('content')
    <form method="POST" action="{{route('login_post')}}">
        <div class="mb-3">
            <label for="inputLogin" class="form-label">Ваш логин</label>
            <input type="email" class="form-control @error('login') is-invalid @enderror" id="inputLogin" name="login" aria-describedby="inputLoginValidation">
            
            <div id="inputLoginValidation" class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Ваш пароль</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
@endsection
