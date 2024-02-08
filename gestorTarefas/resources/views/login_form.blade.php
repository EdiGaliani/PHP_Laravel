@extends('templates/login_layout')

@section('content')

<div class="class login-wrapper">
    <div class="login-box">
        <h3 class="text-center">Login</h3>
        <hr>
        <form action="{{ route('login_submit') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="text_usename" class="form-label">Usuário</label>
                <input type="text" name="text_usename" id="text_usename" class="form-control" placeholder="Usuário" required>
            </div>
            <div class="mb-3">
                <label for="text_password" class="form-label">Senha</label>
                <input type="text" name="text_password" id="text_password" class="form-control" placeholder="Senha" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-dark w-100">Enviar</button>
            </div>
        </form>
    </div>
</div>

@endsection