@extends('layouts.main')

@section('content')
<!-- Section: Design Block -->
<section class="overflow-hidden">
    <style>

        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }

        body {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%, hsl(218, 41%, 35%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100%), radial-gradient(1250px circle at 100% 100%, hsl(218, 41%, 45%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100%);
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }
    </style>

    <div class="container px-4 py-5 text-center text-lg my-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                    KC Team Management <br />
                    <span style="color: hsl(218, 81%, 75%)">for Aktau AirAstana Base</span>
                </h1>
                <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                    Продукт разработан для управления персоналом базы AirAstana в Актау. <br />
                    Позволяет управлять персоналом, рейсами. Оперативно менять составы команд и статусы рейсов.
                </p>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">

                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass">
                    <div class="card-body px-4 py-5 px-md-5">
                        <form method="POST" action="/register">
                            @csrf
                            <div class="mb-3">
                                <label for="first_name" class="form-label">Имя</label>
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="last_name" class="form-label">Фамилия</label>
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Пароль</label>
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                            </div>

                            <div class="mb-3">
                                <label for="password-confirm" class="form-label">Подтвердите пароль</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    {{ __('Регистрация') }}
                                </button>
                            </div>
                        </form>

                        <div class="mt-3">
                            <p>
                                Уже зарегистрированы? <a href="{{ route('login') }}">Войти</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
